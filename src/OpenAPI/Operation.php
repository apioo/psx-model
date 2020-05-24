<?php

declare(strict_types = 1);

namespace PSX\Model\OpenAPI;

/**
 * @Description("Describes a single API operation on a path.")
 * @Required({"responses"})
 */
class Operation
{
    /**
     * @var array<string>
     * @UniqueItems(true)
     */
    protected $tags;
    /**
     * @var string
     */
    protected $summary;
    /**
     * @var string
     */
    protected $description;
    /**
     * @var ExternalDocs
     */
    protected $externalDocs;
    /**
     * @var string
     */
    protected $operationId;
    /**
     * @var array<Parameter|Reference>
     * @UniqueItems(true)
     */
    protected $parameters;
    /**
     * @var RequestBody|Reference
     */
    protected $requestBody;
    /**
     * @var Responses
     */
    protected $responses;
    /**
     * @var Callback|Reference
     */
    protected $callbacks;
    /**
     * @var bool
     */
    protected $deprecated;
    /**
     * @var array<SecurityRequirement>
     * @UniqueItems(true)
     */
    protected $security;
    /**
     * @var array<Server>
     * @UniqueItems(true)
     */
    protected $servers;
    /**
     * @param array<string> $tags
     */
    public function setTags(?array $tags)
    {
        $this->tags = $tags;
    }
    /**
     * @return array<string>
     */
    public function getTags() : ?array
    {
        return $this->tags;
    }
    /**
     * @param string $summary
     */
    public function setSummary(?string $summary)
    {
        $this->summary = $summary;
    }
    /**
     * @return string
     */
    public function getSummary() : ?string
    {
        return $this->summary;
    }
    /**
     * @param string $description
     */
    public function setDescription(?string $description)
    {
        $this->description = $description;
    }
    /**
     * @return string
     */
    public function getDescription() : ?string
    {
        return $this->description;
    }
    /**
     * @param ExternalDocs $externalDocs
     */
    public function setExternalDocs(?ExternalDocs $externalDocs)
    {
        $this->externalDocs = $externalDocs;
    }
    /**
     * @return ExternalDocs
     */
    public function getExternalDocs() : ?ExternalDocs
    {
        return $this->externalDocs;
    }
    /**
     * @param string $operationId
     */
    public function setOperationId(?string $operationId)
    {
        $this->operationId = $operationId;
    }
    /**
     * @return string
     */
    public function getOperationId() : ?string
    {
        return $this->operationId;
    }
    /**
     * @param array<Parameter|Reference> $parameters
     */
    public function setParameters(?array $parameters)
    {
        $this->parameters = $parameters;
    }
    /**
     * @return array<Parameter|Reference>
     */
    public function getParameters() : ?array
    {
        return $this->parameters;
    }
    /**
     * @param RequestBody|Reference $requestBody
     */
    public function setRequestBody($requestBody)
    {
        $this->requestBody = $requestBody;
    }
    /**
     * @return RequestBody|Reference
     */
    public function getRequestBody()
    {
        return $this->requestBody;
    }
    /**
     * @param Responses $responses
     */
    public function setResponses(?Responses $responses)
    {
        $this->responses = $responses;
    }
    /**
     * @return Responses
     */
    public function getResponses() : ?Responses
    {
        return $this->responses;
    }
    /**
     * @param Callback|Reference $callbacks
     */
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
    /**
     * @param bool $deprecated
     */
    public function setDeprecated(?bool $deprecated)
    {
        $this->deprecated = $deprecated;
    }
    /**
     * @return bool
     */
    public function getDeprecated() : ?bool
    {
        return $this->deprecated;
    }
    /**
     * @param array<SecurityRequirement> $security
     */
    public function setSecurity(?array $security)
    {
        $this->security = $security;
    }
    /**
     * @return array<SecurityRequirement>
     */
    public function getSecurity() : ?array
    {
        return $this->security;
    }
    /**
     * @param array<Server> $servers
     */
    public function setServers(?array $servers)
    {
        $this->servers = $servers;
    }
    /**
     * @return array<Server>
     */
    public function getServers() : ?array
    {
        return $this->servers;
    }
}
