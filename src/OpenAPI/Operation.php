<?php

declare(strict_types = 1);

namespace PSX\Model\OpenAPI;

/**
 * @Description("Describes a single API operation on a path.")
 * @Required({"responses"})
 */
class Operation implements \JsonSerializable
{
    /**
     * @var array<string>|null
     * @UniqueItems(true)
     */
    protected $tags;
    /**
     * @var string|null
     */
    protected $summary;
    /**
     * @var string|null
     */
    protected $description;
    /**
     * @var ExternalDocs|null
     */
    protected $externalDocs;
    /**
     * @var string|null
     */
    protected $operationId;
    /**
     * @var array<Parameter|Reference>|null
     * @UniqueItems(true)
     */
    protected $parameters;
    /**
     * @var RequestBody|Reference|null
     */
    protected $requestBody;
    /**
     * @var Responses|null
     */
    protected $responses;
    /**
     * @var Callback|Reference|null
     */
    protected $callbacks;
    /**
     * @var bool|null
     */
    protected $deprecated;
    /**
     * @var array<SecurityRequirement>|null
     * @UniqueItems(true)
     */
    protected $security;
    /**
     * @var array<Server>|null
     * @UniqueItems(true)
     */
    protected $servers;
    /**
     * @param array<string>|null $tags
     */
    public function setTags(?array $tags) : void
    {
        $this->tags = $tags;
    }
    /**
     * @return array<string>|null
     */
    public function getTags() : ?array
    {
        return $this->tags;
    }
    /**
     * @param string|null $summary
     */
    public function setSummary(?string $summary) : void
    {
        $this->summary = $summary;
    }
    /**
     * @return string|null
     */
    public function getSummary() : ?string
    {
        return $this->summary;
    }
    /**
     * @param string|null $description
     */
    public function setDescription(?string $description) : void
    {
        $this->description = $description;
    }
    /**
     * @return string|null
     */
    public function getDescription() : ?string
    {
        return $this->description;
    }
    /**
     * @param ExternalDocs|null $externalDocs
     */
    public function setExternalDocs(?ExternalDocs $externalDocs) : void
    {
        $this->externalDocs = $externalDocs;
    }
    /**
     * @return ExternalDocs|null
     */
    public function getExternalDocs() : ?ExternalDocs
    {
        return $this->externalDocs;
    }
    /**
     * @param string|null $operationId
     */
    public function setOperationId(?string $operationId) : void
    {
        $this->operationId = $operationId;
    }
    /**
     * @return string|null
     */
    public function getOperationId() : ?string
    {
        return $this->operationId;
    }
    /**
     * @param array<Parameter|Reference>|null $parameters
     */
    public function setParameters(?array $parameters) : void
    {
        $this->parameters = $parameters;
    }
    /**
     * @return array<Parameter|Reference>|null
     */
    public function getParameters() : ?array
    {
        return $this->parameters;
    }
    /**
     * @param RequestBody|Reference|null $requestBody
     */
    public function setRequestBody($requestBody) : void
    {
        $this->requestBody = $requestBody;
    }
    /**
     * @return RequestBody|Reference|null
     */
    public function getRequestBody()
    {
        return $this->requestBody;
    }
    /**
     * @param Responses|null $responses
     */
    public function setResponses(?Responses $responses) : void
    {
        $this->responses = $responses;
    }
    /**
     * @return Responses|null
     */
    public function getResponses() : ?Responses
    {
        return $this->responses;
    }
    /**
     * @param Callback|Reference|null $callbacks
     */
    public function setCallbacks($callbacks) : void
    {
        $this->callbacks = $callbacks;
    }
    /**
     * @return Callback|Reference|null
     */
    public function getCallbacks()
    {
        return $this->callbacks;
    }
    /**
     * @param bool|null $deprecated
     */
    public function setDeprecated(?bool $deprecated) : void
    {
        $this->deprecated = $deprecated;
    }
    /**
     * @return bool|null
     */
    public function getDeprecated() : ?bool
    {
        return $this->deprecated;
    }
    /**
     * @param array<SecurityRequirement>|null $security
     */
    public function setSecurity(?array $security) : void
    {
        $this->security = $security;
    }
    /**
     * @return array<SecurityRequirement>|null
     */
    public function getSecurity() : ?array
    {
        return $this->security;
    }
    /**
     * @param array<Server>|null $servers
     */
    public function setServers(?array $servers) : void
    {
        $this->servers = $servers;
    }
    /**
     * @return array<Server>|null
     */
    public function getServers() : ?array
    {
        return $this->servers;
    }
    public function jsonSerialize()
    {
        return array_filter(array('tags' => $this->tags, 'summary' => $this->summary, 'description' => $this->description, 'externalDocs' => $this->externalDocs, 'operationId' => $this->operationId, 'parameters' => $this->parameters, 'requestBody' => $this->requestBody, 'responses' => $this->responses, 'callbacks' => $this->callbacks, 'deprecated' => $this->deprecated, 'security' => $this->security, 'servers' => $this->servers), static function ($value) : bool {
            return $value !== null;
        });
    }
}
