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

namespace PSX\Model\OpenAPI;

/**
 * @author  Christoph Kappestein <christoph.kappestein@gmail.com>
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @link    http://phpsx.org
 * @Title("Header")
 * @Description("The Header Object follows the structure of the Parameter Object with the following changes:  1. `name` MUST NOT be specified, it is given in the corresponding `headers` map. 1. `in` MUST NOT be specified, it is implicitly in `header`. 1. All traits that are affected by the location MUST be applicable to a location of `header` (for example, `style`).")
 * @PatternProperties(pattern="^x-", property=@Schema(description="Any property starting with x- is valid."))
 * @AdditionalProperties(false)
 */
class Header extends \ArrayObject
{
    /**
     * @Key("description")
     * @Type("string")
     */
    protected $description;
    
    /**
     * @Key("required")
     * @Type("boolean")
     */
    protected $required;
    
    /**
     * @Key("deprecated")
     * @Type("boolean")
     */
    protected $deprecated;
    
    /**
     * @Key("allowEmptyValue")
     * @Type("boolean")
     */
    protected $allowEmptyValue;
    
    /**
     * @Key("style")
     * @Type("string")
     */
    protected $style;
    
    /**
     * @Key("explode")
     * @Type("boolean")
     */
    protected $explode;
    
    /**
     * @Key("allowReserved")
     * @Type("boolean")
     */
    protected $allowReserved;
    
    /**
     * @Key("schema")
     * @Type("object")
     */
    protected $schema;
    
    /**
     * @Key("example")
     */
    protected $example;
    
    /**
     * @Key("examples")
     * @OneOf(@Ref("PSX\Model\OpenAPI\Example"), @Ref("PSX\Model\OpenAPI\Reference"))
     */
    protected $examples;
    
    /**
     * @Key("content")
     * @Ref("PSX\Model\OpenAPI\MediaTypes")
     */
    protected $content;

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setRequired($required)
    {
        $this->required = $required;
    }

    public function getRequired()
    {
        return $this->required;
    }

    public function setDeprecated($deprecated)
    {
        $this->deprecated = $deprecated;
    }

    public function getDeprecated()
    {
        return $this->deprecated;
    }

    public function setAllowEmptyValue($allowEmptyValue)
    {
        $this->allowEmptyValue = $allowEmptyValue;
    }

    public function getAllowEmptyValue()
    {
        return $this->allowEmptyValue;
    }

    public function setStyle($style)
    {
        $this->style = $style;
    }

    public function getStyle()
    {
        return $this->style;
    }

    public function setExplode($explode)
    {
        $this->explode = $explode;
    }

    public function getExplode()
    {
        return $this->explode;
    }

    public function setAllowReserved($allowReserved)
    {
        $this->allowReserved = $allowReserved;
    }

    public function getAllowReserved()
    {
        return $this->allowReserved;
    }

    public function setSchema($schema)
    {
        $this->schema = $schema;
    }

    public function getSchema()
    {
        return $this->schema;
    }

    public function setExample($example)
    {
        $this->example = $example;
    }

    public function getExample()
    {
        return $this->example;
    }

    public function setExamples($examples)
    {
        $this->examples = $examples;
    }

    public function getExamples()
    {
        return $this->examples;
    }

    public function setContent(MediaTypes $content)
    {
        $this->content = $content;
    }

    public function getContent()
    {
        return $this->content;
    }
}
