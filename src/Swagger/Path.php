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

namespace PSX\Model\Swagger;

/**
 * Path
 *
 * @author  Christoph Kappestein <christoph.kappestein@gmail.com>
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @link    http://phpsx.org
 * @AdditionalProperties(false)
 */
class Path
{
    /**
     * @Key("$ref")
     * @Type("string")
     */
    protected $ref;
    
    /**
     * @Key("get")
     * @Ref("PSX\Model\Swagger\Operation")
     */
    protected $get;
    
    /**
     * @Key("put")
     * @Ref("PSX\Model\Swagger\Operation")
     */
    protected $put;
    
    /**
     * @Key("post")
     * @Ref("PSX\Model\Swagger\Operation")
     */
    protected $post;
    
    /**
     * @Key("delete")
     * @Ref("PSX\Model\Swagger\Operation")
     */
    protected $delete;
    
    /**
     * @Key("options")
     * @Ref("PSX\Model\Swagger\Operation")
     */
    protected $options;
    
    /**
     * @Key("head")
     * @Ref("PSX\Model\Swagger\Operation")
     */
    protected $head;
    
    /**
     * @Key("patch")
     * @Ref("PSX\Model\Swagger\Operation")
     */
    protected $patch;
    
    /**
     * @Key("parameters")
     * @Description("The parameters needed to send a valid API call.")
     * @Type("array")
     * @Items(@Ref("PSX\Model\Swagger\Parameter"))
     * @AdditionalItems(false)
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
    
    public function setHead(Operation $head)
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
    
    public function setParameters(array $parameters)
    {
        $this->parameters = $parameters;
    }
    
    public function getParameters()
    {
        return $this->parameters;
    }
}
