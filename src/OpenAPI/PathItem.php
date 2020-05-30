<?php

declare(strict_types = 1);

namespace PSX\Model\OpenAPI;

/**
 * @Description("Describes the operations available on a single path. A Path Item MAY be empty, due to ACL constraints. The path itself is still exposed to the documentation viewer but they will not know which operations and parameters are available.")
 */
class PathItem
{
    /**
     * @var string|null
     * @Key("$ref")
     */
    protected $ref;
    /**
     * @var string|null
     */
    protected $summary;
    /**
     * @var string|null
     */
    protected $description;
    /**
     * @var Operation|null
     */
    protected $get;
    /**
     * @var Operation|null
     */
    protected $put;
    /**
     * @var Operation|null
     */
    protected $post;
    /**
     * @var Operation|null
     */
    protected $delete;
    /**
     * @var Operation|null
     */
    protected $options;
    /**
     * @var Operation|null
     */
    protected $head;
    /**
     * @var Operation|null
     */
    protected $patch;
    /**
     * @var Operation|null
     */
    protected $trace;
    /**
     * @var array<Server>|null
     * @UniqueItems(true)
     */
    protected $servers;
    /**
     * @var array<Parameter|Reference>|null
     * @UniqueItems(true)
     */
    protected $parameters;
    /**
     * @param string|null $ref
     */
    public function setRef(?string $ref) : void
    {
        $this->ref = $ref;
    }
    /**
     * @return string|null
     */
    public function getRef() : ?string
    {
        return $this->ref;
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
     * @param Operation|null $get
     */
    public function setGet(?Operation $get) : void
    {
        $this->get = $get;
    }
    /**
     * @return Operation|null
     */
    public function getGet() : ?Operation
    {
        return $this->get;
    }
    /**
     * @param Operation|null $put
     */
    public function setPut(?Operation $put) : void
    {
        $this->put = $put;
    }
    /**
     * @return Operation|null
     */
    public function getPut() : ?Operation
    {
        return $this->put;
    }
    /**
     * @param Operation|null $post
     */
    public function setPost(?Operation $post) : void
    {
        $this->post = $post;
    }
    /**
     * @return Operation|null
     */
    public function getPost() : ?Operation
    {
        return $this->post;
    }
    /**
     * @param Operation|null $delete
     */
    public function setDelete(?Operation $delete) : void
    {
        $this->delete = $delete;
    }
    /**
     * @return Operation|null
     */
    public function getDelete() : ?Operation
    {
        return $this->delete;
    }
    /**
     * @param Operation|null $options
     */
    public function setOptions(?Operation $options) : void
    {
        $this->options = $options;
    }
    /**
     * @return Operation|null
     */
    public function getOptions() : ?Operation
    {
        return $this->options;
    }
    /**
     * @param Operation|null $head
     */
    public function setHead(?Operation $head) : void
    {
        $this->head = $head;
    }
    /**
     * @return Operation|null
     */
    public function getHead() : ?Operation
    {
        return $this->head;
    }
    /**
     * @param Operation|null $patch
     */
    public function setPatch(?Operation $patch) : void
    {
        $this->patch = $patch;
    }
    /**
     * @return Operation|null
     */
    public function getPatch() : ?Operation
    {
        return $this->patch;
    }
    /**
     * @param Operation|null $trace
     */
    public function setTrace(?Operation $trace) : void
    {
        $this->trace = $trace;
    }
    /**
     * @return Operation|null
     */
    public function getTrace() : ?Operation
    {
        return $this->trace;
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
     * @param array<Parameter|Reference>|null $parameters
     */
    public function setParameters(?array $parameters) : void
    {
        $this->parameters = $parameters;
    }
    /**
     * @return array<Parameter|Reference>|null
     */
    public function getParameters() : ?array
    {
        return $this->parameters;
    }
}
