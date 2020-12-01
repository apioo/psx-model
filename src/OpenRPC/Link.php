<?php

declare(strict_types = 1);

namespace PSX\Model\OpenRPC;

/**
 * @Description("The Link object represents a possible design-time link for a result. The presence of a link does not guarantee the caller’s ability to successfully invoke it, rather it provides a known relationship and traversal mechanism between results and other methods.")
 */
class Link implements \JsonSerializable
{
    /**
     * @var string|null
     */
    protected $name;
    /**
     * @var string|null
     */
    protected $description;
    /**
     * @var string|null
     */
    protected $summary;
    /**
     * @var string|null
     */
    protected $method;
    /**
     * @var Params|null
     */
    protected $params;
    /**
     * @var \PSX\Model\OpenAPI\Server|null
     */
    protected $server;
    /**
     * @param string|null $name
     */
    public function setName(?string $name) : void
    {
        $this->name = $name;
    }
    /**
     * @return string|null
     */
    public function getName() : ?string
    {
        return $this->name;
    }
    /**
     * @param string|null $description
     */
    public function setDescription(?string $description) : void
    {
        $this->description = $description;
    }
    /**
     * @return string|null
     */
    public function getDescription() : ?string
    {
        return $this->description;
    }
    /**
     * @param string|null $summary
     */
    public function setSummary(?string $summary) : void
    {
        $this->summary = $summary;
    }
    /**
     * @return string|null
     */
    public function getSummary() : ?string
    {
        return $this->summary;
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
     * @param Params|null $params
     */
    public function setParams(?Params $params) : void
    {
        $this->params = $params;
    }
    /**
     * @return Params|null
     */
    public function getParams() : ?Params
    {
        return $this->params;
    }
    /**
     * @param \PSX\Model\OpenAPI\Server|null $server
     */
    public function setServer(?\PSX\Model\OpenAPI\Server $server) : void
    {
        $this->server = $server;
    }
    /**
     * @return \PSX\Model\OpenAPI\Server|null
     */
    public function getServer() : ?\PSX\Model\OpenAPI\Server
    {
        return $this->server;
    }
    public function jsonSerialize()
    {
        return (object) array_filter(array('name' => $this->name, 'description' => $this->description, 'summary' => $this->summary, 'method' => $this->method, 'params' => $this->params, 'server' => $this->server), static function ($value) : bool {
            return $value !== null;
        });
    }
}
