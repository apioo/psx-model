<?php
/*
 * PSX is a open source PHP framework to develop RESTful APIs.
 * For the current version and informations visit <http://phpsx.org>
 *
 * Copyright 2010-2017 Christoph Kappestein <christoph.kappestein@gmail.com>
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
 * @PatternProperties(pattern="^x-", property=@Schema(description="Any property starting with x- is valid."))
 * @AdditionalProperties(false)
 */
class PathItem extends \ArrayObject
{
    /**
     * @Key("$ref")
     * @Type("string")
     */
    protected $ref;
    
    /**
     * @Key("summary")
     * @Type("string")
     */
    protected $summary;
    
    /**
     * @Key("description")
     * @Type("string")
     */
    protected $description;
    
    /**
     * @Key("get")
     * @Ref("PSX\Model\OpenAPI\Operation")
     */
    protected $get;
    
    /**
     * @Key("put")
     * @Ref("PSX\Model\OpenAPI\Operation")
     */
    protected $put;
    
    /**
     * @Key("post")
     * @Ref("PSX\Model\OpenAPI\Operation")
     */
    protected $post;
    
    /**
     * @Key("delete")
     * @Ref("PSX\Model\OpenAPI\Operation")
     */
    protected $delete;
    
    /**
     * @Key("options")
     * @Ref("PSX\Model\OpenAPI\Operation")
     */
    protected $options;
    
    /**
     * @Key("head")
     * @Ref("PSX\Model\OpenAPI\Operation")
     */
    protected $head;
    
    /**
     * @Key("patch")
     * @Ref("PSX\Model\OpenAPI\Operation")
     */
    protected $patch;
    
    /**
     * @Key("trace")
     * @Ref("PSX\Model\OpenAPI\Operation")
     */
    protected $trace;
    
    /**
     * @Key("servers")
     * @Type("array")
     * @Items(@Ref("PSX\Model\OpenAPI\Server"))
     * @UniqueItems(true)
     */
    protected $servers;
    
    /**
     * @Key("parameters")
     * @Type("array")
     * @Items(@Schema(oneOf={@Ref("PSX\Model\OpenAPI\Parameter"), @Ref("PSX\Model\OpenAPI\Reference")}))
     * @UniqueItems(true)
     */
    protected $parameters;

    public function setRef($ref)
    {
        $this->ref = $ref;
    }

    public function getRef()
    {
        return $this->ref;
    }

    public function setSummary($summary)
    {
        $this->summary = $summary;
    }

    public function getSummary()
    {
        return $this->summary;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setGet(Operation $get)
    {
        $this->get = $get;
    }

    public function getGet()
    {
        return $this->get;
    }

    public function setPut(Operation $put)
    {
        $this->put = $put;
    }

    public function getPut()
    {
        return $this->put;
    }

    public function setPost(Operation $post)
    {
        $this->post = $post;
    }

    public function getPost()
    {
        return $this->post;
    }

    public function setDelete(Operation $delete)
    {
        $this->delete = $delete;
    }

    public function getDelete()
    {
        return $this->delete;
    }

    public function setOptions(Operation $options)
    {
        $this->options = $options;
    }

    public function getOptions()
    {
        return $this->options;
    }

    public function setHead(Operation$head)
    {
        $this->head = $head;
    }

    public function getHead()
    {
        return $this->head;
    }

    public function setPatch(Operation $patch)
    {
        $this->patch = $patch;
    }

    public function getPatch()
    {
        return $this->patch;
    }

    public function setTrace(Operation $trace)
    {
        $this->trace = $trace;
    }

    public function getTrace()
    {
        return $this->trace;
    }

    public function setServers($servers)
    {
        $this->servers = $servers;
    }

    public function getServers()
    {
        return $this->servers;
    }

    public function setParameters($parameters)
    {
        $this->parameters = $parameters;
    }

    public function getParameters()
    {
        return $this->parameters;
    }
}
