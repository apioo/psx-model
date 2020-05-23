<?php
/*
 * PSX is a open source PHP framework to develop RESTful APIs.
 * For the current version and informations visit <http://phpsx.org>
 *
 * Copyright 2010-2018 Christoph Kappestein <christoph.kappestein@gmail.com>
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace PSX\Model\OpenAPI;

/**
 * @author  Christoph Kappestein <christoph.kappestein@gmail.com>
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @link    http://phpsx.org
 * @Title("PathItem")
 * @Description("Describes the operations available on a single path. A Path Item MAY be empty, due to ACL constraints. The path itself is still exposed to the documentation viewer but they will not know which operations and parameters are available.")
 */
class PathItem
{
    /**
     * @Key("$ref")
     * @var string
     */
    protected $ref;

    /**
     * @Key("summary")
     * @var string
     */
    protected $summary;

    /**
     * @Key("description")
     * @var string
     */
    protected $description;

    /**
     * @Key("get")
     * @var \PSX\Model\OpenAPI\Operation
     */
    protected $get;

    /**
     * @Key("put")
     * @var \PSX\Model\OpenAPI\Operation
     */
    protected $put;

    /**
     * @Key("post")
     * @var \PSX\Model\OpenAPI\Operation
     */
    protected $post;

    /**
     * @Key("delete")
     * @var \PSX\Model\OpenAPI\Operation
     */
    protected $delete;

    /**
     * @Key("options")
     * @var \PSX\Model\OpenAPI\Operation
     */
    protected $options;

    /**
     * @Key("head")
     * @var \PSX\Model\OpenAPI\Operation
     */
    protected $head;

    /**
     * @Key("patch")
     * @var \PSX\Model\OpenAPI\Operation
     */
    protected $patch;

    /**
     * @Key("trace")
     * @var \PSX\Model\OpenAPI\Operation
     */
    protected $trace;

    /**
     * @Key("servers")
     * @UniqueItems(true)
     * @var array<\PSX\Model\OpenAPI\Server>
     */
    protected $servers;

    /**
     * @Key("parameters")
     * @UniqueItems(true)
     * @var array<\PSX\Model\OpenAPI\Parameter|\PSX\Model\OpenAPI\Reference>
     */
    protected $parameters;

    public function setRef(string $ref)
    {
        $this->ref = $ref;
    }

    public function getRef(): ?string
    {
        return $this->ref;
    }

    public function setSummary(string $summary)
    {
        $this->summary = $summary;
    }

    public function getSummary(): ?string
    {
        return $this->summary;
    }

    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setGet(Operation $get)
    {
        $this->get = $get;
    }

    public function getGet(): ?Operation
    {
        return $this->get;
    }

    public function setPut(Operation $put)
    {
        $this->put = $put;
    }

    public function getPut(): ?Operation
    {
        return $this->put;
    }

    public function setPost(Operation $post)
    {
        $this->post = $post;
    }

    public function getPost(): ?Operation
    {
        return $this->post;
    }

    public function setDelete(Operation $delete)
    {
        $this->delete = $delete;
    }

    public function getDelete(): ?Operation
    {
        return $this->delete;
    }

    public function setOptions(Operation $options)
    {
        $this->options = $options;
    }

    public function getOptions(): ?Operation
    {
        return $this->options;
    }

    public function setHead(Operation$head)
    {
        $this->head = $head;
    }

    public function getHead(): ?Operation
    {
        return $this->head;
    }

    public function setPatch(Operation $patch)
    {
        $this->patch = $patch;
    }

    public function getPatch(): ?Operation
    {
        return $this->patch;
    }

    public function setTrace(Operation $trace)
    {
        $this->trace = $trace;
    }

    public function getTrace(): ?Operation
    {
        return $this->trace;
    }

    public function setServers($servers)
    {
        $this->servers = $servers;
    }

    /**
     * @return array
     */
    public function getServers()
    {
        return $this->servers;
    }

    public function setParameters($parameters)
    {
        $this->parameters = $parameters;
    }

    /**
     * @return array
     */
    public function getParameters()
    {
        return $this->parameters;
    }
}
