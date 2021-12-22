<?php

declare(strict_types = 1);

namespace PSX\Model\AsyncAPI;


class OperationBindings implements \JsonSerializable
{
    protected ?HttpOperationBinding $http = null;
    public function setHttp(?HttpOperationBinding $http) : void
    {
        $this->http = $http;
    }
    public function getHttp() : ?HttpOperationBinding
    {
        return $this->http;
    }
    public function jsonSerialize()
    {
        return (object) array_filter(array('http' => $this->http), static function ($value) : bool {
            return $value !== null;
        });
    }
}

