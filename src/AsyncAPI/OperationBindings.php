<?php

declare(strict_types = 1);

namespace PSX\Model\AsyncAPI;


class OperationBindings implements \JsonSerializable
{
    /**
     * @var HttpOperationBinding|null
     */
    protected $http;
    /**
     * @param HttpOperationBinding|null $http
     */
    public function setHttp(?HttpOperationBinding $http) : void
    {
        $this->http = $http;
    }
    /**
     * @return HttpOperationBinding|null
     */
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
