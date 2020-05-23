<?php
/*
 * PSX is a open source PHP framework to develop RESTful APIs.
 * For the current version and informations visit <http://phpsx.org>
 *
 * Copyright 2010-2018 Christoph Kappestein <christoph.kappestein@gmail.com>
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
 * @Title("Parameter")
 * @Description("Describes a single operation parameter.  A unique parameter is defined by a combination of a name and location.")
 * @Required({"name", "in"})
 */
class Parameter
{
    /**
     * @Key("name")
     * @var string
     */
    protected $name;
    
    /**
     * @Key("in")
     * @var string
     */
    protected $in;
    
    /**
     * @Key("description")
     * @var string
     */
    protected $description;
    
    /**
     * @Key("required")
     * @var boolean
     */
    protected $required;
    
    /**
     * @Key("deprecated")
     * @var boolean
     */
    protected $deprecated;
    
    /**
     * @Key("allowEmptyValue")
     * @var boolean
     */
    protected $allowEmptyValue;
    
    /**
     * @Key("style")
     * @var string
     */
    protected $style;
    
    /**
     * @Key("explode")
     * @var boolean
     */
    protected $explode;
    
    /**
     * @Key("allowReserved")
     * @var boolean
     */
    protected $allowReserved;
    
    /**
     * @Key("schema")
     * @var object
     */
    protected $schema;
    
    /**
     * @Key("example")
     */
    protected $example;
    
    /**
     * @Key("examples")
     * @var \PSX\Model\OpenAPI\Example|\PSX\Model\OpenAPI\Reference
     */
    protected $examples;
    
    /**
     * @Key("content")
     * @var \PSX\Model\OpenAPI\MediaTypes
     */
    protected $content;

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setIn(string $in)
    {
        $this->in = $in;
    }

    public function getIn(): ?string
    {
        return $this->in;
    }

    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setRequired(bool $required)
    {
        $this->required = $required;
    }

    public function getRequired(): ?bool
    {
        return $this->required;
    }

    public function setDeprecated(bool $deprecated)
    {
        $this->deprecated = $deprecated;
    }

    public function getDeprecated(): ?bool
    {
        return $this->deprecated;
    }

    public function setAllowEmptyValue(bool $allowEmptyValue)
    {
        $this->allowEmptyValue = $allowEmptyValue;
    }

    public function getAllowEmptyValue(): ?bool
    {
        return $this->allowEmptyValue;
    }

    public function setStyle(string $style)
    {
        $this->style = $style;
    }

    public function getStyle(): ?string
    {
        return $this->style;
    }

    public function setExplode(bool $explode)
    {
        $this->explode = $explode;
    }

    public function getExplode(): ?bool
    {
        return $this->explode;
    }

    public function setAllowReserved(bool $allowReserved)
    {
        $this->allowReserved = $allowReserved;
    }

    public function getAllowReserved(): ?bool
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

    public function getContent(): ?MediaTypes
    {
        return $this->content;
    }
}
