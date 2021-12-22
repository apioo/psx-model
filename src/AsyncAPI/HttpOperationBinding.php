<?php

declare(strict_types = 1);

namespace PSX\Model\AsyncAPI;

use PSX\Schema\Attribute\Enum;

class HttpOperationBinding implements \JsonSerializable
{
    #[Enum(array('request', 'response'))]
    protected ?string $type = null;
    #[Enum(array('GET', 'POST', 'PUT', 'PATCH', 'DELETE', 'HEAD', 'OPTIONS', 'CONNECT', 'TRACE'))]
    protected ?string $method = null;
    protected ?mixed $query = null;
    protected ?string $bindingVersion = null;
    public function setType(?string $type) : void
    {
        $this->type = $type;
    }
    public function getType() : ?string
    {
        return $this->type;
    }
    public function setMethod(?string $method) : void
    {
        $this->method = $method;
    }
    public function getMethod() : ?string
    {
        return $this->method;
    }
    public function setQuery(?mixed $query) : void
    {
        $this->query = $query;
    }
    public function getQuery() : ?mixed
    {
        return $this->query;
    }
    public function setBindingVersion(?string $bindingVersion) : void
    {
        $this->bindingVersion = $bindingVersion;
    }
    public function getBindingVersion() : ?string
    {
        return $this->bindingVersion;
    }
    public function jsonSerialize()
    {
        return (object) array_filter(array('type' => $this->type, 'method' => $this->method, 'query' => $this->query, 'bindingVersion' => $this->bindingVersion), static function ($value) : bool {
            return $value !== null;
        });
    }
}

