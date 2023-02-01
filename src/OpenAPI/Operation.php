<?php

declare(strict_types = 1);

namespace PSX\Model\OpenAPI;

use PSX\Schema\Attribute\Description;
use PSX\Schema\Attribute\Required;

#[Description('Describes a single API operation on a path.')]
#[Required(array('responses'))]
class Operation implements \JsonSerializable
{
    /**
     * @var array<string>|null
     */
    protected ?array $tags = null;
    protected ?string $summary = null;
    protected ?string $description = null;
    protected ?ExternalDocs $externalDocs = null;
    protected ?string $operationId = null;
    /**
     * @var array<Parameter>|null
     */
    protected ?array $parameters = null;
    protected ?RequestBody $requestBody = null;
    protected ?Responses $responses = null;
    protected ?Callbacks $callbacks = null;
    protected ?bool $deprecated = null;
    /**
     * @var array<SecurityRequirement>|null
     */
    protected ?array $security = null;
    /**
     * @var array<Server>|null
     */
    protected ?array $servers = null;
    /**
     * @param array<string>|null $tags
     */
    public function setTags(?array $tags) : void
    {
        $this->tags = $tags;
    }
    public function getTags() : ?array
    {
        return $this->tags;
    }
    public function setSummary(?string $summary) : void
    {
        $this->summary = $summary;
    }
    public function getSummary() : ?string
    {
        return $this->summary;
    }
    public function setDescription(?string $description) : void
    {
        $this->description = $description;
    }
    public function getDescription() : ?string
    {
        return $this->description;
    }
    public function setExternalDocs(?ExternalDocs $externalDocs) : void
    {
        $this->externalDocs = $externalDocs;
    }
    public function getExternalDocs() : ?ExternalDocs
    {
        return $this->externalDocs;
    }
    public function setOperationId(?string $operationId) : void
    {
        $this->operationId = $operationId;
    }
    public function getOperationId() : ?string
    {
        return $this->operationId;
    }
    /**
     * @param array<Parameter>|null $parameters
     */
    public function setParameters(?array $parameters) : void
    {
        $this->parameters = $parameters;
    }
    public function getParameters() : ?array
    {
        return $this->parameters;
    }
    public function setRequestBody(?RequestBody $requestBody) : void
    {
        $this->requestBody = $requestBody;
    }
    public function getRequestBody() : ?RequestBody
    {
        return $this->requestBody;
    }
    public function setResponses(?Responses $responses) : void
    {
        $this->responses = $responses;
    }
    public function getResponses() : ?Responses
    {
        return $this->responses;
    }
    public function setCallbacks(?Callbacks $callbacks) : void
    {
        $this->callbacks = $callbacks;
    }
    public function getCallbacks() : ?Callbacks
    {
        return $this->callbacks;
    }
    public function setDeprecated(?bool $deprecated) : void
    {
        $this->deprecated = $deprecated;
    }
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
    public function getServers() : ?array
    {
        return $this->servers;
    }
    public function jsonSerialize() : object
    {
        return (object) array_filter(array('tags' => $this->tags, 'summary' => $this->summary, 'description' => $this->description, 'externalDocs' => $this->externalDocs, 'operationId' => $this->operationId, 'parameters' => $this->parameters, 'requestBody' => $this->requestBody, 'responses' => $this->responses, 'callbacks' => $this->callbacks, 'deprecated' => $this->deprecated, 'security' => $this->security, 'servers' => $this->servers), static function ($value) : bool {
            return $value !== null;
        });
    }
}

