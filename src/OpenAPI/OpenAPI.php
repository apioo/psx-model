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
     * @var string
     */
    protected $openapi = '3.0.0';
    /**
     * @var Info
     */
    protected $info;
    /**
     * @var array<Server>
     * @UniqueItems(true)
     */
    protected $servers;
    /**
     * @var Paths
     */
    protected $paths;
    /**
     * @var Components
     */
    protected $components;
    /**
     * @var array<SecurityRequirement>
     * @UniqueItems(true)
     */
    protected $security;
    /**
     * @var array<Tag>
     * @UniqueItems(true)
     */
    protected $tags;
    /**
     * @var ExternalDocs
     */
    protected $externalDocs;
    /**
     * @param string $openapi
     */
    public function setOpenapi(?string $openapi)
    {
        $this->openapi = $openapi;
    }
    /**
     * @return string
     */
    public function getOpenapi() : ?string
    {
        return $this->openapi;
    }
    /**
     * @param Info $info
     */
    public function setInfo(?Info $info)
    {
        $this->info = $info;
    }
    /**
     * @return Info
     */
    public function getInfo() : ?Info
    {
        return $this->info;
    }
    /**
     * @param array<Server> $servers
     */
    public function setServers(?array $servers)
    {
        $this->servers = $servers;
    }
    /**
     * @return array<Server>
     */
    public function getServers() : ?array
    {
        return $this->servers;
    }
    /**
     * @param Paths $paths
     */
    public function setPaths(?Paths $paths)
    {
        $this->paths = $paths;
    }
    /**
     * @return Paths
     */
    public function getPaths() : ?Paths
    {
        return $this->paths;
    }
    /**
     * @param Components $components
     */
    public function setComponents(?Components $components)
    {
        $this->components = $components;
    }
    /**
     * @return Components
     */
    public function getComponents() : ?Components
    {
        return $this->components;
    }
    /**
     * @param array<SecurityRequirement> $security
     */
    public function setSecurity(?array $security)
    {
        $this->security = $security;
    }
    /**
     * @return array<SecurityRequirement>
     */
    public function getSecurity() : ?array
    {
        return $this->security;
    }
    /**
     * @param array<Tag> $tags
     */
    public function setTags(?array $tags)
    {
        $this->tags = $tags;
    }
    /**
     * @return array<Tag>
     */
    public function getTags() : ?array
    {
        return $this->tags;
    }
    /**
     * @param ExternalDocs $externalDocs
     */
    public function setExternalDocs(?ExternalDocs $externalDocs)
    {
        $this->externalDocs = $externalDocs;
    }
    /**
     * @return ExternalDocs
     */
    public function getExternalDocs() : ?ExternalDocs
    {
        return $this->externalDocs;
    }
}
