<?php

declare(strict_types = 1);

namespace PSX\Model\OpenAPI;

/**
 * @Description("This is the root document object of the OpenAPI definition file.")
 * @Required({"openapi", "info", "paths"})
 */
class OpenAPI
{
    /**
     * @var string|null
     */
    protected $openapi = '3.0.0';
    /**
     * @var Info|null
     */
    protected $info;
    /**
     * @var array<Server>|null
     * @UniqueItems(true)
     */
    protected $servers;
    /**
     * @var Paths|null
     */
    protected $paths;
    /**
     * @var Components|null
     */
    protected $components;
    /**
     * @var array<SecurityRequirement>|null
     * @UniqueItems(true)
     */
    protected $security;
    /**
     * @var array<Tag>|null
     * @UniqueItems(true)
     */
    protected $tags;
    /**
     * @var ExternalDocs|null
     */
    protected $externalDocs;
    /**
     * @param string|null $openapi
     */
    public function setOpenapi(?string $openapi) : void
    {
        $this->openapi = $openapi;
    }
    /**
     * @return string|null
     */
    public function getOpenapi() : ?string
    {
        return $this->openapi;
    }
    /**
     * @param Info|null $info
     */
    public function setInfo(?Info $info) : void
    {
        $this->info = $info;
    }
    /**
     * @return Info|null
     */
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
    /**
     * @return array<Server>|null
     */
    public function getServers() : ?array
    {
        return $this->servers;
    }
    /**
     * @param Paths|null $paths
     */
    public function setPaths(?Paths $paths) : void
    {
        $this->paths = $paths;
    }
    /**
     * @return Paths|null
     */
    public function getPaths() : ?Paths
    {
        return $this->paths;
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
     * @param array<SecurityRequirement>|null $security
     */
    public function setSecurity(?array $security) : void
    {
        $this->security = $security;
    }
    /**
     * @return array<SecurityRequirement>|null
     */
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
    /**
     * @return array<Tag>|null
     */
    public function getTags() : ?array
    {
        return $this->tags;
    }
    /**
     * @param ExternalDocs|null $externalDocs
     */
    public function setExternalDocs(?ExternalDocs $externalDocs) : void
    {
        $this->externalDocs = $externalDocs;
    }
    /**
     * @return ExternalDocs|null
     */
    public function getExternalDocs() : ?ExternalDocs
    {
        return $this->externalDocs;
    }
}
