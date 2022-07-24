<?php

declare(strict_types = 1);

namespace PSX\Model\OpenRPC;

use PSX\Schema\Attribute\Description;
use PSX\Schema\Attribute\Required;

#[Description('This is the root object of the OpenRPC document. The contents of this object represent a whole OpenRPC document. How this object is constructed or stored is outside the scope of the OpenRPC Specification.')]
#[Required(array('openrpc', 'info', 'methods'))]
class OpenRPC implements \JsonSerializable
{
    protected ?string $openrpc = '3.0.0';
    protected ?\PSX\Model\OpenAPI\Info $info = null;
    /**
     * @var array<\PSX\Model\OpenAPI\Server>|null
     */
    protected ?array $servers = null;
    /**
     * @var array<Method>|null
     */
    protected ?array $methods = null;
    protected ?Components $components = null;
    protected ?\PSX\Model\OpenAPI\ExternalDocs $externalDocs = null;
    public function setOpenrpc(?string $openrpc) : void
    {
        $this->openrpc = $openrpc;
    }
    public function getOpenrpc() : ?string
    {
        return $this->openrpc;
    }
    public function setInfo(?\PSX\Model\OpenAPI\Info $info) : void
    {
        $this->info = $info;
    }
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
    public function getMethods() : ?array
    {
        return $this->methods;
    }
    public function setComponents(?Components $components) : void
    {
        $this->components = $components;
    }
    public function getComponents() : ?Components
    {
        return $this->components;
    }
    public function setExternalDocs(?\PSX\Model\OpenAPI\ExternalDocs $externalDocs) : void
    {
        $this->externalDocs = $externalDocs;
    }
    public function getExternalDocs() : ?\PSX\Model\OpenAPI\ExternalDocs
    {
        return $this->externalDocs;
    }
    public function jsonSerialize() : object
    {
        return (object) array_filter(array('openrpc' => $this->openrpc, 'info' => $this->info, 'servers' => $this->servers, 'methods' => $this->methods, 'components' => $this->components, 'externalDocs' => $this->externalDocs), static function ($value) : bool {
            return $value !== null;
        });
    }
}

