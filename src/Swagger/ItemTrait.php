<?php
/*
 * PSX is a open source PHP framework to develop RESTful APIs.
 * For the current version and informations visit <http://phpsx.org>
 *
 * Copyright 2010-2017 Christoph Kappestein <christoph.kappestein@gmail.com>
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace PSX\Model\Swagger;

/**
 * SchemaTrait
 *
 * @author  Christoph Kappestein <christoph.kappestein@gmail.com>
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @link    http://phpsx.org
 */
trait ItemTrait
{
    /**
     * @Key("type")
     * @Enum({"string", "number", "integer", "boolean", "array"})
     * @Type("string")
     */
    protected $type;

    /**
     * @Key("format")
     * @Type("string")
     */
    protected $format;

    /**
     * @Key("items")
     * @Ref("PSX\Generation\Objectdc2e2153")
     */
    protected $items;

    /**
     * @Key("collectionFormat")
     * @Enum({"csv", "ssv", "tsv", "pipes"})
     * @Type("string")
     */
    protected $collectionFormat;

    /**
     * @Key("default")
     */
    protected $default;

    /**
     * @Key("maximum")
     */
    protected $maximum;

    /**
     * @Key("exclusiveMaximum")
     */
    protected $exclusiveMaximum;

    /**
     * @Key("minimum")
     */
    protected $minimum;

    /**
     * @Key("exclusiveMinimum")
     */
    protected $exclusiveMinimum;

    /**
     * @Key("maxLength")
     */
    protected $maxLength;

    /**
     * @Key("minLength")
     */
    protected $minLength;

    /**
     * @Key("pattern")
     */
    protected $pattern;

    /**
     * @Key("maxItems")
     */
    protected $maxItems;

    /**
     * @Key("minItems")
     */
    protected $minItems;

    /**
     * @Key("uniqueItems")
     */
    protected $uniqueItems;

    /**
     * @Key("enum")
     */
    protected $enum;

    /**
     * @Key("multipleOf")
     */
    protected $multipleOf;


    public function setType($type)
    {
        $this->type = $type;
    }

    public function getType()
    {
        return $this->type;
    }

    public function setFormat($format)
    {
        $this->format = $format;
    }

    public function getFormat()
    {
        return $this->format;
    }

    public function setItems($items)
    {
        $this->items = $items;
    }

    public function getItems()
    {
        return $this->items;
    }

    public function setCollectionFormat($collectionFormat)
    {
        $this->collectionFormat = $collectionFormat;
    }

    public function getCollectionFormat()
    {
        return $this->collectionFormat;
    }

    public function setDefault($default)
    {
        $this->default = $default;
    }

    public function getDefault()
    {
        return $this->default;
    }

    public function setMaximum($maximum)
    {
        $this->maximum = $maximum;
    }

    public function getMaximum()
    {
        return $this->maximum;
    }

    public function setExclusiveMaximum($exclusiveMaximum)
    {
        $this->exclusiveMaximum = $exclusiveMaximum;
    }

    public function getExclusiveMaximum()
    {
        return $this->exclusiveMaximum;
    }

    public function setMinimum($minimum)
    {
        $this->minimum = $minimum;
    }

    public function getMinimum()
    {
        return $this->minimum;
    }

    public function setExclusiveMinimum($exclusiveMinimum)
    {
        $this->exclusiveMinimum = $exclusiveMinimum;
    }

    public function getExclusiveMinimum()
    {
        return $this->exclusiveMinimum;
    }

    public function setMaxLength($maxLength)
    {
        $this->maxLength = $maxLength;
    }

    public function getMaxLength()
    {
        return $this->maxLength;
    }

    public function setMinLength($minLength)
    {
        $this->minLength = $minLength;
    }

    public function getMinLength()
    {
        return $this->minLength;
    }

    public function setPattern($pattern)
    {
        $this->pattern = $pattern;
    }

    public function getPattern()
    {
        return $this->pattern;
    }

    public function setMaxItems($maxItems)
    {
        $this->maxItems = $maxItems;
    }

    public function getMaxItems()
    {
        return $this->maxItems;
    }

    public function setMinItems($minItems)
    {
        $this->minItems = $minItems;
    }

    public function getMinItems()
    {
        return $this->minItems;
    }

    public function setUniqueItems($uniqueItems)
    {
        $this->uniqueItems = $uniqueItems;
    }

    public function getUniqueItems()
    {
        return $this->uniqueItems;
    }

    public function setEnum($enum)
    {
        $this->enum = $enum;
    }

    public function getEnum()
    {
        return $this->enum;
    }

    public function setMultipleOf($multipleOf)
    {
        $this->multipleOf = $multipleOf;
    }

    public function getMultipleOf()
    {
        return $this->multipleOf;
    }
}
