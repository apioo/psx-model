<?php

declare(strict_types = 1);

namespace PSX\Model\OpenAPI;

use PSX\Schema\Attribute\Description;

#[Description('The `Link object` represents a possible design-time link for a response. The presence of a link does not guarantee the caller\'s ability to successfully invoke it, rather it provides a known relationship and traversal mechanism between responses and other operations.  Unlike _dynamic_ links (i.e. links provided **in** the response payload), the OAS linking mechanism does not require link information in the runtime response.  For computing links, and providing instructions to execute them, a runtime expression is used for accessing values in an operation and using them as parameters while invoking the linked operation.')]
class Link implements \JsonSerializable
{
    protected ?string $operationRef = null;
    protected ?string $operationId = null;
    protected ?string $description = null;
    protected ?Server $server = null;
    public function setOperationRef(?string $operationRef) : void
    {
        $this->operationRef = $operationRef;
    }
    public function getOperationRef() : ?string
    {
        return $this->operationRef;
    }
    public function setOperationId(?string $operationId) : void
    {
        $this->operationId = $operationId;
    }
    public function getOperationId() : ?string
    {
        return $this->operationId;
    }
    public function setDescription(?string $description) : void
    {
        $this->description = $description;
    }
    public function getDescription() : ?string
    {
        return $this->description;
    }
    public function setServer(?Server $server) : void
    {
        $this->server = $server;
    }
    public function getServer() : ?Server
    {
        return $this->server;
    }
    public function jsonSerialize()
    {
        return (object) array_filter(array('operationRef' => $this->operationRef, 'operationId' => $this->operationId, 'description' => $this->description, 'server' => $this->server), static function ($value) : bool {
            return $value !== null;
        });
    }
}

