<?php

declare(strict_types = 1);

namespace PSX\Model\OpenAPI;

use PSX\Schema\Attribute\Description;
use PSX\Schema\Attribute\Key;

#[Description('Describes the operations available on a single path. A Path Item MAY be empty, due to ACL constraints. The path itself is still exposed to the documentation viewer but they will not know which operations and parameters are available.')]
class PathItem implements \JsonSerializable
{
    #[Key('$ref')]
    protected ?string $ref = null;
    protected ?string $summary = null;
    protected ?string $description = null;
    protected ?Operation $get = null;
    protected ?Operation $put = null;
    protected ?Operation $post = null;
    protected ?Operation $delete = null;
    protected ?Operation $options = null;
    protected ?Operation $head = null;
    protected ?Operation $patch = null;
    protected ?Operation $trace = null;
    /**
     * @var array<Server>|null
     */
    protected ?array $servers = null;
    /**
     * @var array<Parameter|Reference>|null
     */
    protected ?array $parameters = null;
    public function setRef(?string $ref) : void
    {
        $this->ref = $ref;
    }
    public function getRef() : ?string
    {
        return $this->ref;
    }
    public function setSummary(?string $summary) : void
    {
        $this->summary = $summary;
    }
    public function getSummary() : ?string
    {
        return $this->summary;
    }
    public function setDescription(?string $description) : void
    {
        $this->description = $description;
    }
    public function getDescription() : ?string
    {
        return $this->description;
    }
    public function setGet(?Operation $get) : void
    {
        $this->get = $get;
    }
    public function getGet() : ?Operation
    {
        return $this->get;
    }
    public function setPut(?Operation $put) : void
    {
        $this->put = $put;
    }
    public function getPut() : ?Operation
    {
        return $this->put;
    }
    public function setPost(?Operation $post) : void
    {
        $this->post = $post;
    }
    public function getPost() : ?Operation
    {
        return $this->post;
    }
    public function setDelete(?Operation $delete) : void
    {
        $this->delete = $delete;
    }
    public function getDelete() : ?Operation
    {
        return $this->delete;
    }
    public function setOptions(?Operation $options) : void
    {
        $this->options = $options;
    }
    public function getOptions() : ?Operation
    {
        return $this->options;
    }
    public function setHead(?Operation $head) : void
    {
        $this->head = $head;
    }
    public function getHead() : ?Operation
    {
        return $this->head;
    }
    public function setPatch(?Operation $patch) : void
    {
        $this->patch = $patch;
    }
    public function getPatch() : ?Operation
    {
        return $this->patch;
    }
    public function setTrace(?Operation $trace) : void
    {
        $this->trace = $trace;
    }
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
    public function getParameters() : ?array
    {
        return $this->parameters;
    }
    public function jsonSerialize()
    {
        return (object) array_filter(array('$ref' => $this->ref, 'summary' => $this->summary, 'description' => $this->description, 'get' => $this->get, 'put' => $this->put, 'post' => $this->post, 'delete' => $this->delete, 'options' => $this->options, 'head' => $this->head, 'patch' => $this->patch, 'trace' => $this->trace, 'servers' => $this->servers, 'parameters' => $this->parameters), static function ($value) : bool {
            return $value !== null;
        });
    }
}

