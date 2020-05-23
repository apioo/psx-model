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
 * @Title("Xml")
 * @Description("A metadata object that allows for more fine-tuned XML model definitions.  When using arrays, XML element names are *not* inferred (for singular/plural forms) and the `name` property SHOULD be used to add that information. See examples for expected behavior.")
 */
class Xml
{
    /**
     * @Key("name")
     * @var string
     */
    protected $name;
    
    /**
     * @Key("namespace")
     * @var string
     */
    protected $namespace;
    
    /**
     * @Key("prefix")
     * @var string
     */
    protected $prefix;
    
    /**
     * @Key("attribute")
     * @var boolean
     */
    protected $attribute;
    
    /**
     * @Key("wrapped")
     * @var boolean
     */
    protected $wrapped;

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setNamespace(string $namespace)
    {
        $this->namespace = $namespace;
    }

    public function getNamespace(): ?string
    {
        return $this->namespace;
    }

    public function setPrefix(string $prefix)
    {
        $this->prefix = $prefix;
    }

    public function getPrefix(): ?string
    {
        return $this->prefix;
    }

    public function setAttribute(bool $attribute)
    {
        $this->attribute = $attribute;
    }

    public function getAttribute(): ?bool
    {
        return $this->attribute;
    }

    public function setWrapped(bool $wrapped)
    {
        $this->wrapped = $wrapped;
    }

    public function getWrapped(): ?bool
    {
        return $this->wrapped;
    }
}
