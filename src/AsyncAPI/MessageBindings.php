<?php

declare(strict_types = 1);

namespace PSX\Model\AsyncAPI;


class MessageBindings implements \JsonSerializable
{
    /**
     * @var HttpMessageBinding|null
     */
    protected $http;
    /**
     * @param HttpMessageBinding|null $http
     */
    public function setHttp(?HttpMessageBinding $http) : void
    {
        $this->http = $http;
    }
    /**
     * @return HttpMessageBinding|null
     */
    public function getHttp() : ?HttpMessageBinding
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
