<?php

declare(strict_types = 1);

namespace PSX\Model\OpenRPC;

/**
 * @Description("This is the root object of the OpenRPC document. The contents of this object represent a whole OpenRPC document. How this object is constructed or stored is outside the scope of the OpenRPC Specification.")
 * @Required({"openrpc", "info", "methods"})
 */
class OpenRPC implements \JsonSerializable
{
    /**
     * @var string|null
     */
    protected $openrpc = '3.0.0';
    /**
     * @var \PSX\Model\OpenAPI\Info|null
     */
    protected $info;
    /**
     * @var array<\PSX\Model\OpenAPI\Server>|null
     */
    protected $servers;
    /**
     * @var array<Method>|null
     */
    protected $methods;
    /**
     * @var Components|null
     */
    protected $components;
    /**
     * @var \PSX\Model\OpenAPI\ExternalDocs|null
     */
    protected $externalDocs;
    /**
     * @param string|null $openrpc
     */
    public function setOpenrpc(?string $openrpc) : void
    {
        $this->openrpc = $openrpc;
    }
    /**
     * @return string|null
     */
    public function getOpenrpc() : ?string
    {
        return $this->openrpc;
    }
    /**
     * @param \PSX\Model\OpenAPI\Info|null $info
     */
    public function setInfo(?\PSX\Model\OpenAPI\Info $info) : void
    {
        $this->info = $info;
    }
    /**
     * @return \PSX\Model\OpenAPI\Info|null
     */
    public function getInfo() : ?\PSX\Model\OpenAPI\Info
    {
        return $this->info;
    }
    /**
     * @param array<\PSX\Model\OpenAPI\Server>|null $servers
     */
    public function setServers(?array $servers) : void
    {
        $this->servers = $servers;
    }
    /**
     * @return array<\PSX\Model\OpenAPI\Server>|null
     */
    public function getServers() : ?array
    {
        return $this->servers;
    }
    /**
     * @param array<Method>|null $methods
     */
    public function setMethods(?array $methods) : void
    {
        $this->methods = $methods;
    }
    /**
     * @return array<Method>|null
     */
    public function getMethods() : ?array
    {
        return $this->methods;
    }
    /**
     * @param Components|null $components
     */
    public function setComponents(?Components $components) : void
    {
        $this->components = $components;
    }
    /**
     * @return Components|null
     */
    public function getComponents() : ?Components
    {
        return $this->components;
    }
    /**
     * @param \PSX\Model\OpenAPI\ExternalDocs|null $externalDocs
     */
    public function setExternalDocs(?\PSX\Model\OpenAPI\ExternalDocs $externalDocs) : void
    {
        $this->externalDocs = $externalDocs;
    }
    /**
     * @return \PSX\Model\OpenAPI\ExternalDocs|null
     */
    public function getExternalDocs() : ?\PSX\Model\OpenAPI\ExternalDocs
    {
        return $this->externalDocs;
    }
    public function jsonSerialize()
    {
        return (object) array_filter(array('openrpc' => $this->openrpc, 'info' => $this->info, 'servers' => $this->servers, 'methods' => $this->methods, 'components' => $this->components, 'externalDocs' => $this->externalDocs), static function ($value) : bool {
            return $value !== null;
        });
    }
}
