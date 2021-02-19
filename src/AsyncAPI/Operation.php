<?php

declare(strict_types = 1);

namespace PSX\Model\AsyncAPI;


class Operation implements \JsonSerializable
{
    /**
     * @var string|null
     */
    protected $operationId;
    /**
     * @var string|null
     */
    protected $summary;
    /**
     * @var string|null
     */
    protected $description;
    /**
     * @var array<\PSX\Model\OpenAPI\Tag>|null
     */
    protected $tags;
    /**
     * @var \PSX\Model\OpenAPI\ExternalDocs|null
     */
    protected $externalDocs;
    /**
     * @var OperationBindings|null
     */
    protected $bindings;
    /**
     * @var Message|null
     */
    protected $message;
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
     * @param array<\PSX\Model\OpenAPI\Tag>|null $tags
     */
    public function setTags(?array $tags) : void
    {
        $this->tags = $tags;
    }
    /**
     * @return array<\PSX\Model\OpenAPI\Tag>|null
     */
    public function getTags() : ?array
    {
        return $this->tags;
    }
    /**
     * @param \PSX\Model\OpenAPI\ExternalDocs|null $externalDocs
     */
    public function setExternalDocs(?\PSX\Model\OpenAPI\ExternalDocs $externalDocs) : void
    {
        $this->externalDocs = $externalDocs;
    }
    /**
     * @return \PSX\Model\OpenAPI\ExternalDocs|null
     */
    public function getExternalDocs() : ?\PSX\Model\OpenAPI\ExternalDocs
    {
        return $this->externalDocs;
    }
    /**
     * @param OperationBindings|null $bindings
     */
    public function setBindings(?OperationBindings $bindings) : void
    {
        $this->bindings = $bindings;
    }
    /**
     * @return OperationBindings|null
     */
    public function getBindings() : ?OperationBindings
    {
        return $this->bindings;
    }
    /**
     * @param Message|null $message
     */
    public function setMessage(?Message $message) : void
    {
        $this->message = $message;
    }
    /**
     * @return Message|null
     */
    public function getMessage() : ?Message
    {
        return $this->message;
    }
    public function jsonSerialize()
    {
        return (object) array_filter(array('operationId' => $this->operationId, 'summary' => $this->summary, 'description' => $this->description, 'tags' => $this->tags, 'externalDocs' => $this->externalDocs, 'bindings' => $this->bindings, 'message' => $this->message), static function ($value) : bool {
            return $value !== null;
        });
    }
}
