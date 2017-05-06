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
 * Response
 *
 * @author  Christoph Kappestein <christoph.kappestein@gmail.com>
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @link    http://phpsx.org
 * @AdditionalProperties(false)
 * @Required({"description"})
 */
class Response extends \ArrayObject
{
    /**
     * @Key("description")
     * @Type("string")
     */
    protected $description;
    
    /**
     * @Key("schema")
     */
    protected $schema;
    
    /**
     * @Key("headers")
     * @Ref("PSX\Model\Swagger\Headers")
     */
    protected $headers;
    
    /**
     * @Key("examples")
     * @Ref("PSX\Model\Swagger\Examples")
     */
    protected $examples;
    
    public function setDescription($description)
    {
        $this->description = $description;
    }
    
    public function getDescription()
    {
        return $this->description;
    }
    
    public function setSchema(\stdClass $schema)
    {
        $this->schema = $schema;
    }
    
    public function getSchema()
    {
        return $this->schema;
    }
    
    public function setHeaders(Headers $headers)
    {
        $this->headers = $headers;
    }
    
    public function getHeaders()
    {
        return $this->headers;
    }
    
    public function setExamples(Examples $examples)
    {
        $this->examples = $examples;
    }
    
    public function getExamples()
    {
        return $this->examples;
    }
}
