<?php

declare(strict_types = 1);

namespace PSX\Model\OpenRPC;

use PSX\Schema\Attribute\Description;

#[Description('The Link object represents a possible design-time link for a result. The presence of a link does not guarantee the caller’s ability to successfully invoke it, rather it provides a known relationship and traversal mechanism between results and other methods.')]
class Link implements \JsonSerializable
{
    protected ?string $name = null;
    protected ?string $description = null;
    protected ?string $summary = null;
    protected ?string $method = null;
    protected ?Params $params = null;
    protected ?\PSX\Model\OpenAPI\Server $server = null;
    public function setName(?string $name) : void
    {
        $this->name = $name;
    }
    public function getName() : ?string
    {
        return $this->name;
    }
    public function setDescription(?string $description) : void
    {
        $this->description = $description;
    }
    public function getDescription() : ?string
    {
        return $this->description;
    }
    public function setSummary(?string $summary) : void
    {
        $this->summary = $summary;
    }
    public function getSummary() : ?string
    {
        return $this->summary;
    }
    public function setMethod(?string $method) : void
    {
        $this->method = $method;
    }
    public function getMethod() : ?string
    {
        return $this->method;
    }
    public function setParams(?Params $params) : void
    {
        $this->params = $params;
    }
    public function getParams() : ?Params
    {
        return $this->params;
    }
    public function setServer(?\PSX\Model\OpenAPI\Server $server) : void
    {
        $this->server = $server;
    }
    public function getServer() : ?\PSX\Model\OpenAPI\Server
    {
        return $this->server;
    }
    public function jsonSerialize() : object
    {
        return (object) array_filter(array('name' => $this->name, 'description' => $this->description, 'summary' => $this->summary, 'method' => $this->method, 'params' => $this->params, 'server' => $this->server), static function ($value) : bool {
            return $value !== null;
        });
    }
}

