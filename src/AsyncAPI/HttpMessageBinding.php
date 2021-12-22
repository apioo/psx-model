<?php

declare(strict_types = 1);

namespace PSX\Model\AsyncAPI;


class HttpMessageBinding implements \JsonSerializable
{
    protected ?mixed $headers = null;
    protected ?string $bindingVersion = null;
    public function setHeaders(?mixed $headers) : void
    {
        $this->headers = $headers;
    }
    public function getHeaders() : ?mixed
    {
        return $this->headers;
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
        return (object) array_filter(array('headers' => $this->headers, 'bindingVersion' => $this->bindingVersion), static function ($value) : bool {
            return $value !== null;
        });
    }
}

