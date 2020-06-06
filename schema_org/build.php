<?php

$definitions = [];

[$classes, $properties] = parse(__DIR__ . '/schema.ttl');

$dataTypes = ['Text', 'Number', 'Date', 'DateTime', 'Time', 'Boolean', 'Float', 'Integer', 'DataType', 'URL', 'CssSelectorType', 'XPathType'];

foreach ($classes as $name => $class) {
    $object = new stdClass();

    if (in_array($name, $dataTypes)) {
        continue;
    }

    $subClass = $class->{'rdfs:subClassOf'} ?? null;
    if (!empty($subClass)) {
        if (is_array($subClass)) {
            $object->{'$extends'} = reset($subClass);
        } elseif (is_string($subClass)) {
            $object->{'$extends'} = $subClass;
        }
    }

    $description = $class->{'rdfs:comment'} ?? null;
    if ($description !== null) {
        $object->{'description'} = is_array($description) ? implode(', ', $description) : $description;
    }

    $object->{'type'} = 'object';
    $object->{'properties'} = getPropertiesForObject($name, $properties, $dataTypes);

    $definitions[$name] = $object;
}


$schema = [
    'definitions' => $definitions,
    '$ref' => 'Thing',
];

file_put_contents(__DIR__ . '/../spec/schema_org.json', json_encode($schema, JSON_PRETTY_PRINT));

function getPropertiesForObject($objectName, $properties, $dataTypes)
{
    $result = new stdClass();

    foreach ($properties as $name => $property) {
        $includes = $property->{':domainIncludes'} ?? null;

        if ((is_array($includes) && in_array($objectName, $includes)) || $includes === $objectName) {
            $range = $property->{':rangeIncludes'} ?? null;
            $description = $property->{'rdfs:comment'} ?? null;

            if (is_array($description)) {
                $description = implode(', ', $description);
            }

            if (is_array($range) && count($range) === 1) {
                $range = reset($range);
            }

            $prop = null;
            if (is_array($range)) {
                $oneOf = [];
                foreach ($range as $type) {
                    $oneOf[] = convertToType($type);
                }

                $prop = (object) [
                    'oneOf' => $oneOf
                ];
            } elseif (is_string($range)) {
                $prop = convertToType($range, $description);
            }

            if ($prop !== null) {
                $result->{$name} = $prop;
            }
        }
    }

    return $result;
}

function convertToType(string $type, ?string $description = null)
{
    $prop = new stdClass();

    if ($description !== null) {
        $prop->description = $description;
    }

    if ($type === 'Text') {
        $prop->{'type'} = 'string';
    } elseif ($type === 'Number') {
        $prop->{'type'} = 'number';
    } elseif ($type === 'Float') {
        $prop->{'type'} = 'number';
    } elseif ($type === 'URL') {
        $prop->{'type'} = 'string';
        $prop->{'format'} = 'uri';
    } elseif ($type === 'Integer') {
        $prop->{'type'} = 'integer';
    } elseif ($type === 'Date') {
        $prop->{'type'} = 'string';
        $prop->{'format'} = 'date';
    } elseif ($type === 'DateTime') {
        $prop->{'type'} = 'string';
        $prop->{'format'} = 'date-time';
    } elseif ($type === 'Time') {
        $prop->{'type'} = 'string';
        $prop->{'format'} = 'time';
    } elseif ($type === 'Boolean') {
        $prop->{'type'} = 'boolean';
    } elseif ($type === 'CssSelectorType') {
        $prop->{'type'} = 'string';
    } elseif ($type === 'XPathType') {
        $prop->{'type'} = 'string';
    } else {
        $prop->{'$ref'} = $type;
    }

    return $prop;
}

function parse(string $file): array
{
    $lines = file($file);
    $classes = [];
    $properties = [];

    foreach ($lines as $line) {
        if ($line[0] === ':' && ($pos = strpos($line, ' a rdfs:Class')) !== false) {
            $name = substr($line, 1, $pos - 1);
            $object = new stdClass();
            $property = null;

            $classes[$name] = $object;
        } elseif ($line[0] === ':' && ($pos = strpos($line, ' a rdf:Property')) !== false) {
            $name = substr($line, 1, $pos - 1);
            $object = null;
            $property = new stdClass();

            $properties[$name] = $property;
        }

        if (substr($line, 0, 8) === '        ') {
            $value = trim(trim($line), ' :";.,');

            if ($object) {
                if (is_array($object->{$key})) {
                    $object->{$key}[] = $value;
                }

            } elseif ($property) {
                if (is_array($property->{$key})) {
                    $property->{$key}[] = $value;
                }
            }
        } elseif (substr($line, 0, 4) === '    ') {
            [$key, $value] = explode(' ', trim($line), 2);

            if ($object) {
                if (substr($value, -1) === ',') {
                    $object->{$key} = [trim($value, ' :";.,')];
                } else {
                    $object->{$key} = trim($value, ' :";.,');
                }
            } elseif ($property) {
                if (substr($value, -1) === ',') {
                    $property->{$key} = [trim($value, ' :";.,')];
                } else {
                    $property->{$key} = trim($value, ' :";.,');
                }
            }
        }
    }

    return [$classes, $properties];
}


