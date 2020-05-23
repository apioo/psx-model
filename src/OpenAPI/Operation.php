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
 * @Title("Operation")
 * @Description("Describes a single API operation on a path.")
 * @Required({"responses"})
 */
class Operation
{
    /**
     * @Key("tags")
     * @UniqueItems(true)
     * @var array<string>
     */
    protected $tags;
    
    /**
     * @Key("summary")
     * @var string
     */
    protected $summary;
    
    /**
     * @Key("description")
     * @var string
     */
    protected $description;
    
    /**
     * @Key("externalDocs")
     * @var \PSX\Model\OpenAPI\ExternalDocs
     */
    protected $externalDocs;
    
    /**
     * @Key("operationId")
     * @var string
     */
    protected $operationId;
    
    /**
     * @Key("parameters")
     * @UniqueItems(true)
     * @var array<\PSX\Model\OpenAPI\Parameter|\PSX\Model\OpenAPI\Reference>
     */
    protected $parameters;
    
    /**
     * @Key("requestBody")
     * @var \PSX\Model\OpenAPI\RequestBody|\PSX\Model\OpenAPI\Reference
     */
    protected $requestBody;
    
    /**
     * @Key("responses")
     * @var \PSX\Model\OpenAPI\Responses
     */
    protected $responses;
    
    /**
     * @Key("callbacks")
     * @var \PSX\Model\OpenAPI\Callback|\PSX\Model\OpenAPI\Reference
     */
    protected $callbacks;
    
    /**
     * @Key("deprecated")
     * @var boolean
     */
    protected $deprecated;
    
    /**
     * @Key("security")
     * @UniqueItems(true)
     * @var array<\PSX\Model\OpenAPI\SecurityRequirement>
     */
    protected $security;
    
    /**
     * @Key("servers")
     * @UniqueItems(true)
     * @var array<\PSX\Model\OpenAPI\Server>
     */
    protected $servers;

    public function setTags(array $tags)
    {
        $this->tags = $tags;
    }

    public function getTags(): ?array
    {
        return $this->tags;
    }

    public function setSummary(string $summary)
    {
        $this->summary = $summary;
    }

    public function getSummary(): ?string
    {
        return $this->summary;
    }

    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setExternalDocs(ExternalDocs $externalDocs)
    {
        $this->externalDocs = $externalDocs;
    }

    public function getExternalDocs(): ?ExternalDocs
    {
        return $this->externalDocs;
    }

    public function setOperationId(string $operationId)
    {
        $this->operationId = $operationId;
    }

    public function getOperationId(): ?string
    {
        return $this->operationId;
    }

    public function setParameters($parameters)
    {
        $this->parameters = $parameters;
    }

    /**
     * @return array
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    public function setRequestBody($requestBody)
    {
        $this->requestBody = $requestBody;
    }

    /**
     * @return Reference|RequestBody
     */
    public function getRequestBody()
    {
        return $this->requestBody;
    }

    public function setResponses(Responses $responses)
    {
        $this->responses = $responses;
    }

    public function getResponses(): ?Responses
    {
        return $this->responses;
    }

    public function setCallbacks($callbacks)
    {
        $this->callbacks = $callbacks;
    }

    /**
     * @return Callback|Reference
     */
    public function getCallbacks()
    {
        return $this->callbacks;
    }

    public function setDeprecated(bool $deprecated)
    {
        $this->deprecated = $deprecated;
    }

    public function getDeprecated(): ?bool
    {
        return $this->deprecated;
    }

    public function setSecurity(iterable $security)
    {
        $this->security = $security;
    }

    public function getSecurity(): ?iterable
    {
        return $this->security;
    }

    public function setServers(iterable $servers)
    {
        $this->servers = $servers;
    }

    public function getServers(): ?iterable
    {
        return $this->servers;
    }
}
