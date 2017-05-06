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
 * Xml
 *
 * @author  Christoph Kappestein <christoph.kappestein@gmail.com>
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @link    http://phpsx.org
 * @AdditionalProperties(false)
 */
class Xml
{
    /**
     * @Key("name")
     * @Type("string")
     */
    protected $name;
    
    /**
     * @Key("namespace")
     * @Type("string")
     */
    protected $namespace;
    
    /**
     * @Key("prefix")
     * @Type("string")
     */
    protected $prefix;
    
    /**
     * @Key("attribute")
     * @Type("boolean")
     */
    protected $attribute;
    
    /**
     * @Key("wrapped")
     * @Type("boolean")
     */
    protected $wrapped;
    
    public function setName($name)
    {
        $this->name = $name;
    }
    
    public function getName()
    {
        return $this->name;
    }
    
    public function setNamespace($namespace)
    {
        $this->namespace = $namespace;
    }
    
    public function getNamespace()
    {
        return $this->namespace;
    }
    
    public function setPrefix($prefix)
    {
        $this->prefix = $prefix;
    }
    
    public function getPrefix()
    {
        return $this->prefix;
    }
    
    public function setAttribute($attribute)
    {
        $this->attribute = $attribute;
    }
    
    public function getAttribute()
    {
        return $this->attribute;
    }
    
    public function setWrapped($wrapped)
    {
        $this->wrapped = $wrapped;
    }
    
    public function getWrapped()
    {
        return $this->wrapped;
    }
}
