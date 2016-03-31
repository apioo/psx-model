<?php
/*
 * PSX is a open source PHP framework to develop RESTful APIs.
 * For the current version and informations visit <http://phpsx.org>
 *
 * Copyright 2010-2016 Christoph Kappestein <k42b3.x@gmail.com>
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
 * ResourceListing
 *
 * @author  Christoph Kappestein <k42b3.x@gmail.com>
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @link    http://phpsx.org
 */
class ResourceListing
{
    /**
     * @Type("string")
     */
    protected $swaggerVersion;

    /**
     * @Type("string")
     */
    protected $apiVersion;

    /**
     * @Type("\PSX\Model\Swagger\InfoObject")
     */
    protected $info;

    /**
     * @Type("array<\PSX\Model\Swagger\ResourceObject>")
     */
    protected $apis = array();

    public function __construct($apiVersion = null)
    {
        $this->swaggerVersion = Swagger::VERSION;
        $this->apiVersion     = $apiVersion;
    }

    public function getSwaggerVersion()
    {
        return $this->swaggerVersion;
    }

    public function setSwaggerVersion($swaggerVersion)
    {
        $this->swaggerVersion = $swaggerVersion;
    }

    public function setApiVersion($apiVersion)
    {
        $this->apiVersion = $apiVersion;
    }
    
    public function getApiVersion()
    {
        return $this->apiVersion;
    }

    public function setInfo(InfoObject $info)
    {
        $this->info = $info;
    }

    public function getInfo()
    {
        return $this->info;
    }

    public function setApis(array $apis)
    {
        $this->apis = $apis;
    }
    
    public function getApis()
    {
        return $this->apis;
    }

    public function addResource(ResourceObject $resourceObject)
    {
        $this->apis[] = $resourceObject;
    }
}
