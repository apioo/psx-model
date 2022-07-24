<?php

declare(strict_types = 1);

namespace PSX\Model\AsyncAPI;


class Operation implements \JsonSerializable
{
    protected ?string $operationId = null;
    protected ?string $summary = null;
    protected ?string $description = null;
    /**
     * @var array<\PSX\Model\OpenAPI\Tag>|null
     */
    protected ?array $tags = null;
    protected ?\PSX\Model\OpenAPI\ExternalDocs $externalDocs = null;
    protected ?OperationBindings $bindings = null;
    protected ?Message $message = null;
    public function setOperationId(?string $operationId) : void
    {
        $this->operationId = $operationId;
    }
    public function getOperationId() : ?string
    {
        return $this->operationId;
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
    /**
     * @param array<\PSX\Model\OpenAPI\Tag>|null $tags
     */
    public function setTags(?array $tags) : void
    {
        $this->tags = $tags;
    }
    public function getTags() : ?array
    {
        return $this->tags;
    }
    public function setExternalDocs(?\PSX\Model\OpenAPI\ExternalDocs $externalDocs) : void
    {
        $this->externalDocs = $externalDocs;
    }
    public function getExternalDocs() : ?\PSX\Model\OpenAPI\ExternalDocs
    {
        return $this->externalDocs;
    }
    public function setBindings(?OperationBindings $bindings) : void
    {
        $this->bindings = $bindings;
    }
    public function getBindings() : ?OperationBindings
    {
        return $this->bindings;
    }
    public function setMessage(?Message $message) : void
    {
        $this->message = $message;
    }
    public function getMessage() : ?Message
    {
        return $this->message;
    }
    public function jsonSerialize() : object
    {
        return (object) array_filter(array('operationId' => $this->operationId, 'summary' => $this->summary, 'description' => $this->description, 'tags' => $this->tags, 'externalDocs' => $this->externalDocs, 'bindings' => $this->bindings, 'message' => $this->message), static function ($value) : bool {
            return $value !== null;
        });
    }
}

