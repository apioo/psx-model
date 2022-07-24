<?php

declare(strict_types = 1);

namespace PSX\Model\AsyncAPI;


class MessageBindings implements \JsonSerializable
{
    protected ?HttpMessageBinding $http = null;
    public function setHttp(?HttpMessageBinding $http) : void
    {
        $this->http = $http;
    }
    public function getHttp() : ?HttpMessageBinding
    {
        return $this->http;
    }
    public function jsonSerialize() : object
    {
        return (object) array_filter(array('http' => $this->http), static function ($value) : bool {
            return $value !== null;
        });
    }
}

