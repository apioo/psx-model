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
 * Parameter
 *
 * @author  Christoph Kappestein <christoph.kappestein@gmail.com>
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @link    http://phpsx.org
 */
class Parameter
{
    use ItemTrait;
    
    /**
     * @Key("description")
     * @Description("A brief description of the parameter. This could contain examples of use.  GitHub Flavored Markdown is allowed.")
     * @Type("string")
     */
    protected $description;

    /**
     * @Key("name")
     * @Description("The name of the parameter.")
     * @Type("string")
     */
    protected $name;

    /**
     * @Key("in")
     * @Description("Determines the location of the parameter.")
     * @Enum({"body"})
     * @Type("string")
     */
    protected $in;

    /**
     * @Key("required")
     * @Description("Determines whether or not this parameter is required or optional.")
     * @Type("boolean")
     */
    protected $required;

    /**
     * @Key("schema")
     */
    protected $schema;

    /**
     * @Key("allowEmptyValue")
     * @Type("boolean")
     */
    protected $allowEmptyValue;

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setIn($in)
    {
        $this->in = $in;
    }

    public function getIn()
    {
        return $this->in;
    }

    public function setRequired($required)
    {
        $this->required = $required;
    }

    public function getRequired()
    {
        return $this->required;
    }

    public function getSchema()
    {
        return $this->schema;
    }

    public function setSchema(\stdClass $schema)
    {
        $this->schema = $schema;
    }
    
    public function getAllowEmptyValue()
    {
        return $this->allowEmptyValue;
    }

    public function setAllowEmptyValue($allowEmptyValue)
    {
        $this->allowEmptyValue = $allowEmptyValue;
    }
}
