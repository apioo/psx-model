<?php

declare(strict_types = 1);

namespace PSX\Model\AsyncAPI;


class Message implements \JsonSerializable
{
    /**
     * @var mixed|null
     */
    protected $headers;
    /**
     * @var mixed|null
     */
    protected $payload;
    /**
     * @var string|null
     */
    protected $correlationId;
    /**
     * @var string|null
     */
    protected $schemaFormat;
    /**
     * @var string|null
     */
    protected $contentType;
    /**
     * @var string|null
     */
    protected $name;
    /**
     * @var string|null
     */
    protected $title;
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
     * @var MessageBindings|null
     */
    protected $bindings;
    /**
     * @param mixed|null $headers
     */
    public function setHeaders($headers) : void
    {
        $this->headers = $headers;
    }
    /**
     * @return mixed|null
     */
    public function getHeaders()
    {
        return $this->headers;
    }
    /**
     * @param mixed|null $payload
     */
    public function setPayload($payload) : void
    {
        $this->payload = $payload;
    }
    /**
     * @return mixed|null
     */
    public function getPayload()
    {
        return $this->payload;
    }
    /**
     * @param string|null $correlationId
     */
    public function setCorrelationId(?string $correlationId) : void
    {
        $this->correlationId = $correlationId;
    }
    /**
     * @return string|null
     */
    public function getCorrelationId() : ?string
    {
        return $this->correlationId;
    }
    /**
     * @param string|null $schemaFormat
     */
    public function setSchemaFormat(?string $schemaFormat) : void
    {
        $this->schemaFormat = $schemaFormat;
    }
    /**
     * @return string|null
     */
    public function getSchemaFormat() : ?string
    {
        return $this->schemaFormat;
    }
    /**
     * @param string|null $contentType
     */
    public function setContentType(?string $contentType) : void
    {
        $this->contentType = $contentType;
    }
    /**
     * @return string|null
     */
    public function getContentType() : ?string
    {
        return $this->contentType;
    }
    /**
     * @param string|null $name
     */
    public function setName(?string $name) : void
    {
        $this->name = $name;
    }
    /**
     * @return string|null
     */
    public function getName() : ?string
    {
        return $this->name;
    }
    /**
     * @param string|null $title
     */
    public function setTitle(?string $title) : void
    {
        $this->title = $title;
    }
    /**
     * @return string|null
     */
    public function getTitle() : ?string
    {
        return $this->title;
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
     * @param MessageBindings|null $bindings
     */
    public function setBindings(?MessageBindings $bindings) : void
    {
        $this->bindings = $bindings;
    }
    /**
     * @return MessageBindings|null
     */
    public function getBindings() : ?MessageBindings
    {
        return $this->bindings;
    }
    public function jsonSerialize()
    {
        return (object) array_filter(array('headers' => $this->headers, 'payload' => $this->payload, 'correlationId' => $this->correlationId, 'schemaFormat' => $this->schemaFormat, 'contentType' => $this->contentType, 'name' => $this->name, 'title' => $this->title, 'summary' => $this->summary, 'description' => $this->description, 'tags' => $this->tags, 'externalDocs' => $this->externalDocs, 'bindings' => $this->bindings), static function ($value) : bool {
            return $value !== null;
        });
    }
}
