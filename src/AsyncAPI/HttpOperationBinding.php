<?php

declare(strict_types = 1);

namespace PSX\Model\AsyncAPI;


class HttpOperationBinding implements \JsonSerializable
{
    /**
     * @var string|null
     * @Enum({"request", "response"})
     */
    protected $type;
    /**
     * @var string|null
     * @Enum({"GET", "POST", "PUT", "PATCH", "DELETE", "HEAD", "OPTIONS", "CONNECT", "TRACE"})
     */
    protected $method;
    /**
     * @var mixed|null
     */
    protected $query;
    /**
     * @var string|null
     */
    protected $bindingVersion;
    /**
     * @param string|null $type
     */
    public function setType(?string $type) : void
    {
        $this->type = $type;
    }
    /**
     * @return string|null
     */
    public function getType() : ?string
    {
        return $this->type;
    }
    /**
     * @param string|null $method
     */
    public function setMethod(?string $method) : void
    {
        $this->method = $method;
    }
    /**
     * @return string|null
     */
    public function getMethod() : ?string
    {
        return $this->method;
    }
    /**
     * @param mixed|null $query
     */
    public function setQuery($query) : void
    {
        $this->query = $query;
    }
    /**
     * @return mixed|null
     */
    public function getQuery()
    {
        return $this->query;
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
        return (object) array_filter(array('type' => $this->type, 'method' => $this->method, 'query' => $this->query, 'bindingVersion' => $this->bindingVersion), static function ($value) : bool {
            return $value !== null;
        });
    }
}
