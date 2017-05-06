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
 * Operation
 *
 * @author  Christoph Kappestein <christoph.kappestein@gmail.com>
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @link    http://phpsx.org
 * @AdditionalProperties(false)
 * @Required({"responses"})
 */
class Operation
{
    /**
     * @Key("tags")
     * @Type("array")
     * @Items(@Schema(type="string"))
     * @UniqueItems(true)
     */
    protected $tags;
    
    /**
     * @Key("summary")
     * @Description("A brief summary of the operation.")
     * @Type("string")
     */
    protected $summary;
    
    /**
     * @Key("description")
     * @Description("A longer description of the operation, GitHub Flavored Markdown is allowed.")
     * @Type("string")
     */
    protected $description;
    
    /**
     * @Key("externalDocs")
     * @Ref("PSX\Model\Swagger\ExternalDocs")
     */
    protected $externalDocs;
    
    /**
     * @Key("operationId")
     * @Description("A unique identifier of the operation.")
     * @Type("string")
     */
    protected $operationId;
    
    /**
     * @Key("produces")
     * @Description("A list of MIME types the API can produce.")
     * @Items(@Schema(type="string", description="The MIME type of the HTTP message."))
     */
    protected $produces;
    
    /**
     * @Key("consumes")
     * @Description("A list of MIME types accepted by the API.")
     * @Items(@Schema(type="string", description="The MIME type of the HTTP message."))
     */
    protected $consumes;
    
    /**
     * @Key("parameters")
     * @Description("The parameters needed to send a valid API call.")
     * @Type("array")
     * @Items(@Ref("PSX\Model\Swagger\Parameter"))
     * @AdditionalItems(false)
     * @UniqueItems(true)
     */
    protected $parameters;
    
    /**
     * @Key("responses")
     * @Ref("PSX\Model\Swagger\Responses")
     */
    protected $responses;
    
    /**
     * @Key("schemes")
     * @Description("The transfer protocol of the API.")
     * @Type("array")
     * @Items(@Schema(type="string", enum={"http", "https", "ws", "wss"}))
     * @UniqueItems(true)
     */
    protected $schemes;
    
    /**
     * @Key("deprecated")
     * @Type("boolean")
     */
    protected $deprecated;
    
    /**
     * @Key("security")
     * @Type("array")
     * @Items(@Ref("PSX\Model\Swagger\Security"))
     * @UniqueItems(true)
     */
    protected $security;
    
    public function setTags(array $tags)
    {
        $this->tags = $tags;
    }
    
    public function getTags()
    {
        return $this->tags;
    }
    
    public function setSummary($summary)
    {
        $this->summary = $summary;
    }
    
    public function getSummary()
    {
        return $this->summary;
    }
    
    public function setDescription($description)
    {
        $this->description = $description;
    }
    
    public function getDescription()
    {
        return $this->description;
    }
    
    public function setExternalDocs(ExternalDocs $externalDocs)
    {
        $this->externalDocs = $externalDocs;
    }
    
    public function getExternalDocs()
    {
        return $this->externalDocs;
    }
    
    public function setOperationId($operationId)
    {
        $this->operationId = $operationId;
    }
    
    public function getOperationId()
    {
        return $this->operationId;
    }
    
    public function setProduces(array $produces)
    {
        $this->produces = $produces;
    }
    
    public function getProduces()
    {
        return $this->produces;
    }
    
    public function setConsumes(array $consumes)
    {
        $this->consumes = $consumes;
    }
    
    public function getConsumes()
    {
        return $this->consumes;
    }
    
    public function setParameters(array $parameters)
    {
        $this->parameters = $parameters;
    }
    
    public function getParameters()
    {
        return $this->parameters;
    }
    
    public function setResponses($responses)
    {
        $this->responses = $responses;
    }
    
    public function getResponses()
    {
        return $this->responses;
    }
    
    public function setSchemes(array $schemes)
    {
        $this->schemes = $schemes;
    }
    
    public function getSchemes()
    {
        return $this->schemes;
    }
    
    public function setDeprecated($deprecated)
    {
        $this->deprecated = $deprecated;
    }
    
    public function getDeprecated()
    {
        return $this->deprecated;
    }
    
    public function setSecurity($security)
    {
        $this->security = $security;
    }
    
    public function getSecurity()
    {
        return $this->security;
    }
}
