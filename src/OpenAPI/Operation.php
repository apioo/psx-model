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
 * @Title("Operation")
 * @Description("Describes a single API operation on a path.")
 * @PatternProperties(pattern="^x-", property=@Schema(description="Any property starting with x- is valid."))
 * @AdditionalProperties(false)
 * @Required({"responses"})
 */
class Operation extends \ArrayObject
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
     * @Type("string")
     */
    protected $summary;
    
    /**
     * @Key("description")
     * @Type("string")
     */
    protected $description;
    
    /**
     * @Key("externalDocs")
     * @Ref("PSX\Model\OpenAPI\ExternalDocs")
     */
    protected $externalDocs;
    
    /**
     * @Key("operationId")
     * @Type("string")
     */
    protected $operationId;
    
    /**
     * @Key("parameters")
     * @Type("array")
     * @Items(@Schema(oneOf={@Ref("PSX\Model\OpenAPI\Parameter"), @Ref("PSX\Model\OpenAPI\Reference")}))
     * @UniqueItems(true)
     */
    protected $parameters;
    
    /**
     * @Key("requestBody")
     * @OneOf(@Ref("PSX\Model\OpenAPI\RequestBody"), @Ref("PSX\Model\OpenAPI\Reference"))
     */
    protected $requestBody;
    
    /**
     * @Key("responses")
     * @Ref("PSX\Model\OpenAPI\Responses")
     */
    protected $responses;
    
    /**
     * @Key("callbacks")
     * @OneOf(@Ref("PSX\Model\OpenAPI\Callback"), @Ref("PSX\Model\OpenAPI\Reference"))
     */
    protected $callbacks;
    
    /**
     * @Key("deprecated")
     * @Type("boolean")
     */
    protected $deprecated;
    
    /**
     * @Key("security")
     * @Type("array")
     * @Items(@Ref("PSX\Model\OpenAPI\SecurityRequirement"))
     * @UniqueItems(true)
     */
    protected $security;
    
    /**
     * @Key("servers")
     * @Type("array")
     * @Items(@Ref("PSX\Model\OpenAPI\Server"))
     * @UniqueItems(true)
     */
    protected $servers;

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

    public function setParameters($parameters)
    {
        $this->parameters = $parameters;
    }

    public function getParameters()
    {
        return $this->parameters;
    }

    public function setRequestBody($requestBody)
    {
        $this->requestBody = $requestBody;
    }

    public function getRequestBody()
    {
        return $this->requestBody;
    }

    public function setResponses(Responses $responses)
    {
        $this->responses = $responses;
    }

    public function getResponses()
    {
        return $this->responses;
    }

    public function setCallbacks($callbacks)
    {
        $this->callbacks = $callbacks;
    }

    public function getCallbacks()
    {
        return $this->callbacks;
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

    public function setServers($servers)
    {
        $this->servers = $servers;
    }

    public function getServers()
    {
        return $this->servers;
    }
}
