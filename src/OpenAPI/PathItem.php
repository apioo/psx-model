<?php

declare(strict_types = 1);

namespace PSX\Model\OpenAPI;

/**
 * @Description("Describes the operations available on a single path. A Path Item MAY be empty, due to ACL constraints. The path itself is still exposed to the documentation viewer but they will not know which operations and parameters are available.")
 */
class PathItem
{
    /**
     * @var string
     * @Key("$ref")
     */
    protected $ref;
    /**
     * @var string
     */
    protected $summary;
    /**
     * @var string
     */
    protected $description;
    /**
     * @var Operation
     */
    protected $get;
    /**
     * @var Operation
     */
    protected $put;
    /**
     * @var Operation
     */
    protected $post;
    /**
     * @var Operation
     */
    protected $delete;
    /**
     * @var Operation
     */
    protected $options;
    /**
     * @var Operation
     */
    protected $head;
    /**
     * @var Operation
     */
    protected $patch;
    /**
     * @var Operation
     */
    protected $trace;
    /**
     * @var array<Server>
     * @UniqueItems(true)
     */
    protected $servers;
    /**
     * @var array<Parameter|Reference>
     * @UniqueItems(true)
     */
    protected $parameters;
    /**
     * @param string $ref
     */
    public function setRef(?string $ref)
    {
        $this->ref = $ref;
    }
    /**
     * @return string
     */
    public function getRef() : ?string
    {
        return $this->ref;
    }
    /**
     * @param string $summary
     */
    public function setSummary(?string $summary)
    {
        $this->summary = $summary;
    }
    /**
     * @return string
     */
    public function getSummary() : ?string
    {
        return $this->summary;
    }
    /**
     * @param string $description
     */
    public function setDescription(?string $description)
    {
        $this->description = $description;
    }
    /**
     * @return string
     */
    public function getDescription() : ?string
    {
        return $this->description;
    }
    /**
     * @param Operation $get
     */
    public function setGet(?Operation $get)
    {
        $this->get = $get;
    }
    /**
     * @return Operation
     */
    public function getGet() : ?Operation
    {
        return $this->get;
    }
    /**
     * @param Operation $put
     */
    public function setPut(?Operation $put)
    {
        $this->put = $put;
    }
    /**
     * @return Operation
     */
    public function getPut() : ?Operation
    {
        return $this->put;
    }
    /**
     * @param Operation $post
     */
    public function setPost(?Operation $post)
    {
        $this->post = $post;
    }
    /**
     * @return Operation
     */
    public function getPost() : ?Operation
    {
        return $this->post;
    }
    /**
     * @param Operation $delete
     */
    public function setDelete(?Operation $delete)
    {
        $this->delete = $delete;
    }
    /**
     * @return Operation
     */
    public function getDelete() : ?Operation
    {
        return $this->delete;
    }
    /**
     * @param Operation $options
     */
    public function setOptions(?Operation $options)
    {
        $this->options = $options;
    }
    /**
     * @return Operation
     */
    public function getOptions() : ?Operation
    {
        return $this->options;
    }
    /**
     * @param Operation $head
     */
    public function setHead(?Operation $head)
    {
        $this->head = $head;
    }
    /**
     * @return Operation
     */
    public function getHead() : ?Operation
    {
        return $this->head;
    }
    /**
     * @param Operation $patch
     */
    public function setPatch(?Operation $patch)
    {
        $this->patch = $patch;
    }
    /**
     * @return Operation
     */
    public function getPatch() : ?Operation
    {
        return $this->patch;
    }
    /**
     * @param Operation $trace
     */
    public function setTrace(?Operation $trace)
    {
        $this->trace = $trace;
    }
    /**
     * @return Operation
     */
    public function getTrace() : ?Operation
    {
        return $this->trace;
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
     * @param array<Parameter|Reference> $parameters
     */
    public function setParameters(?array $parameters)
    {
        $this->parameters = $parameters;
    }
    /**
     * @return array<Parameter|Reference>
     */
    public function getParameters() : ?array
    {
        return $this->parameters;
    }
}
