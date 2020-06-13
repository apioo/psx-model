<?php

$definitions = [];
$dataTypes = ['Text', 'Number', 'Date', 'DateTime', 'Time', 'Boolean', 'Float', 'Integer', 'DataType', 'URL', 'CssSelectorType', 'XPathType', 'DefinedTerm'];

[$classes, $properties] = parse(__DIR__ . '/schema.rdf');

$classes = array_filter($classes, static function(stdClass $class) use ($dataTypes) {
    return !in_array($class->label, $dataTypes);
});

foreach ($classes as $name => $class) {
    $object = new stdClass();

    $subClass = array_filter(array_map(function($subClass) use ($classes){
        if (isset($classes[$subClass])) {
            return $classes[$subClass]->label;
        } else {
            return null;
        }
    }, $class->subClassOf));

    if (!empty($subClass)) {
        $object->{'$extends'} = reset($subClass);
    }

    $description = $class->comment ?? null;
    if ($description !== null) {
        $object->{'description'} = is_array($description) ? implode(', ', $description) : $description;
    }

    $object->{'type'} = 'object';
    $object->{'properties'} = getPropertiesForObject($name, $properties, $dataTypes);

    $definitions[$class->label] = $object;
}


$schema = [
    'definitions' => $definitions,
    '$ref' => 'Thing',
];

file_put_contents(__DIR__ . '/../spec/schema_org.json', json_encode($schema, JSON_PRETTY_PRINT));

function getPropertiesForObject($objectName, $properties, $dataTypes)
{
    $result = new stdClass();

    foreach ($properties as $property) {
        if (in_array($objectName, $property->domainIncludes)) {
            $description = $property->comment;

            $range = $property->rangeIncludes;
            $prop = null;
            $oneOf = resolveOneOf($range);
            if (count($oneOf) > 1) {
                $prop = (object)[
                    'oneOf' => $oneOf
                ];
            } elseif (count($oneOf) === 1) {
                $prop = $oneOf[0];
            }

            if ($prop !== null) {
                $result->{$property->label} = $prop;
            }
        }
    }

    return $result;
}

function convertToType(string $type, ?string $description = null): ?stdClass
{
    global $classes;

    $prop = new stdClass();

    if ($description !== null) {
        $prop->description = $description;
    }

    if (isset($classes[$type])) {
        $prop->{'$ref'} = $classes[$type]->label;
    } elseif ($type === 'http://schema.org/Text') {
        $prop->{'type'} = 'string';
    } elseif ($type === 'http://schema.org/Number') {
        $prop->{'type'} = 'number';
    } elseif ($type === 'http://schema.org/Float') {
        $prop->{'type'} = 'number';
    } elseif ($type === 'http://schema.org/URL') {
        $prop->{'type'} = 'string';
        $prop->{'format'} = 'uri';
    } elseif ($type === 'http://schema.org/Integer') {
        $prop->{'type'} = 'integer';
    } elseif ($type === 'http://schema.org/Date') {
        $prop->{'type'} = 'string';
        $prop->{'format'} = 'date';
    } elseif ($type === 'http://schema.org/DateTime') {
        $prop->{'type'} = 'string';
        $prop->{'format'} = 'date-time';
    } elseif ($type === 'http://schema.org/Time') {
        $prop->{'type'} = 'string';
        $prop->{'format'} = 'time';
    } elseif ($type === 'http://schema.org/Boolean') {
        $prop->{'type'} = 'boolean';
    } elseif ($type === 'http://schema.org/CssSelectorType') {
        $prop->{'type'} = 'string';
    } elseif ($type === 'http://schema.org/XPathType') {
        $prop->{'type'} = 'string';
    } elseif ($type === 'http://schema.org/DefinedTerm') {
        $prop->{'type'} = 'string';
    } else {
        return null;
    }

    return $prop;
}

function parse(string $file): array
{
    $dom = new \DOMDocument();
    $dom->load($file);

    $propertyElements = $dom->getElementsByTagName('Property');
    $classElements = $dom->getElementsByTagName('Class');

    $classes = [];
    foreach ($classElements as $classElement) {
        $classes[$classElement->getAttribute('rdf:about')] = (object) [
            'subClassOf' => getElementResources($classElement, 'subClassOf'),
            'source' => getElementResources($classElement, 'source'),
            'comment' => getElementValue($classElement, 'comment'),
            'label' => getElementValue($classElement, 'label'),
        ];
    }

    $properties = [];
    foreach ($propertyElements as $propertyElement) {
        /** @var \DOMElement $propertyElement */

        $supersededBy = $propertyElement->getElementsByTagName('supersededBy')->item(0);
        if ($supersededBy instanceof \DOMElement) {
            $propertyElement = $supersededBy;
        }

        $properties[$propertyElement->getAttribute('rdf:about')] = (object) [
            'source' => getElementResources($propertyElement, 'source'),
            'domainIncludes' => getElementResources($propertyElement, 'domainIncludes'),
            'rangeIncludes' => getElementResources($propertyElement, 'rangeIncludes'),
            'comment' => getElementValue($propertyElement, 'comment'),
            'label' => getElementValue($propertyElement, 'label'),
        ];
    }

    return [$classes, $properties];
}

function getElementResources(\DOMElement $classElement, string $name): array
{
    $result = [];
    $elements = $classElement->getElementsByTagName($name);
    foreach ($elements as $element) {
        $result[] = $element->getAttribute('rdf:resource');
    }
    return $result;
}

function getElementValue(\DOMElement $classElement, string $name): ?string
{
    $elements = $classElement->getElementsByTagName($name);
    foreach ($elements as $element) {
        return $element->textContent;
    }
    return null;
}

function getClassParents(string $className): array
{
    $parents = [];
    while (($parent = getClassParent($className)) !== null) {
        $parents[] = $parent;
        $className = $parent;
    }
    return $parents;
}

function getClassParent(string $className)
{
    global $classes;

    if (isset($classes[$className]) && count($classes[$className]->subClassOf) > 0) {
        return reset($classes[$className]->subClassOf);
    } else {
        return null;
    }
}

function resolveOneOf(array $range): array
{
    $elements = [];
    $withoutParents = [];
    foreach ($range as $type) {
        $parents = getClassParents($type);
        if (count($parents) > 0) {
            $elements[$type] = $parents;
        } else {
            $withoutParents[] = $type;
        }
    }

    // remove all elements which are already included by another type
    $result = [];
    foreach ($elements as $type => $path) {
        $found = false;
        foreach ($path as $item) {
            if (isset($elements[$item])) {
                $found = true;
                break;
            }
        }

        if (!$found) {
            $result[] = $type;
        }
    }

    $result = array_merge($withoutParents, $result);

    $oneOf = [];
    foreach ($result as $type) {
        $oneOf[] = convertToType($type);
    }

    return array_values(array_map('json_decode', array_unique(array_map('json_encode', array_filter($oneOf)))));
}
