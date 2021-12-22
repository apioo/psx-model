<?php

declare(strict_types = 1);

namespace PSX\Model\OpenAPI;

use PSX\Schema\Attribute\Description;
use PSX\Schema\Attribute\Required;

#[Description('This is the root document object of the OpenAPI definition file.')]
#[Required(array('openapi', 'info', 'paths'))]
class OpenAPI implements \JsonSerializable
{
    protected ?string $openapi = '3.0.0';
    protected ?Info $info = null;
    /**
     * @var array<Server>|null
     */
    protected ?array $servers = null;
    protected ?Paths $paths = null;
    protected ?Components $components = null;
    /**
     * @var array<SecurityRequirement>|null
     */
    protected ?array $security = null;
    /**
     * @var array<Tag>|null
     */
    protected ?array $tags = null;
    protected ?ExternalDocs $externalDocs = null;
    public function setOpenapi(?string $openapi) : void
    {
        $this->openapi = $openapi;
    }
    public function getOpenapi() : ?string
    {
        return $this->openapi;
    }
    public function setInfo(?Info $info) : void
    {
        $this->info = $info;
    }
    public function getInfo() : ?Info
    {
        return $this->info;
    }
    /**
     * @param array<Server>|null $servers
     */
    public function setServers(?array $servers) : void
    {
        $this->servers = $servers;
    }
    public function getServers() : ?array
    {
        return $this->servers;
    }
    public function setPaths(?Paths $paths) : void
    {
        $this->paths = $paths;
    }
    public function getPaths() : ?Paths
    {
        return $this->paths;
    }
    public function setComponents(?Components $components) : void
    {
        $this->components = $components;
    }
    public function getComponents() : ?Components
    {
        return $this->components;
    }
    /**
     * @param array<SecurityRequirement>|null $security
     */
    public function setSecurity(?array $security) : void
    {
        $this->security = $security;
    }
    public function getSecurity() : ?array
    {
        return $this->security;
    }
    /**
     * @param array<Tag>|null $tags
     */
    public function setTags(?array $tags) : void
    {
        $this->tags = $tags;
    }
    public function getTags() : ?array
    {
        return $this->tags;
    }
    public function setExternalDocs(?ExternalDocs $externalDocs) : void
    {
        $this->externalDocs = $externalDocs;
    }
    public function getExternalDocs() : ?ExternalDocs
    {
        return $this->externalDocs;
    }
    public function jsonSerialize()
    {
        return (object) array_filter(array('openapi' => $this->openapi, 'info' => $this->info, 'servers' => $this->servers, 'paths' => $this->paths, 'components' => $this->components, 'security' => $this->security, 'tags' => $this->tags, 'externalDocs' => $this->externalDocs), static function ($value) : bool {
            return $value !== null;
        });
    }
}

