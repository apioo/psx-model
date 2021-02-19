<?php

declare(strict_types = 1);

namespace PSX\Model\AsyncAPI;


class HttpMessageBinding implements \JsonSerializable
{
    /**
     * @var mixed|null
     */
    protected $headers;
    /**
     * @var string|null
     */
    protected $bindingVersion;
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
     * @param string|null $bindingVersion
     */
    public function setBindingVersion(?string $bindingVersion) : void
    {
        $this->bindingVersion = $bindingVersion;
    }
    /**
     * @return string|null
     */
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
