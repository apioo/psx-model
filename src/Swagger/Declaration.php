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

use PSX\Record\Record;

/**
 * Declaration
 *
 * @author  Christoph Kappestein <k42b3.x@gmail.com>
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @link    http://phpsx.org
 */
class Declaration
{
    /**
     * @Type("string")
     * @Required
     */
    protected $swaggerVersion;

    /**
     * @Type("string")
     */
    protected $apiVersion;

    /**
     * @Type("string")
     * @Required
     */
    protected $basePath;

    /**
     * @Type("string")
     */
    protected $resourcePath;

    /**
     * @Type("array<PSX\Model\Swagger\Api>")
     * @Required
     */
    protected $apis;

    /**
     * @Type("PSX\Model\Swagger\Models")
     */
    protected $models;

    /**
     * @Type("array<string>")
     */
    protected $produces;

    /**
     * @Type("array<string>")
     */
    protected $consumes;

    public function __construct($apiVersion = null, $basePath = null, $resourcePath = null)
    {
        $this->swaggerVersion = Swagger::VERSION;
        $this->apiVersion     = $apiVersion;
        $this->basePath       = $basePath;
        $this->apis           = array();
        $this->models         = new Models();

        if ($resourcePath !== null) {
            $this->setResourcePath($resourcePath);
        }
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

    public function setBasePath($basePath)
    {
        $this->basePath = $basePath;
    }
    
    public function getBasePath()
    {
        return $this->basePath;
    }

    public function setResourcePath($resourcePath)
    {
        $this->resourcePath = '/' . ltrim($resourcePath, '/');
    }

    public function getResourcePath()
    {
        return $this->resourcePath;
    }

    public function getProduces()
    {
        return $this->produces;
    }

    public function setProduces($produces)
    {
        $this->produces = $produces;
    }

    public function setApis(array $api)
    {
        $this->apis = $api;
    }

    public function getApis()
    {
        return $this->apis;
    }

    public function addApi(Api $api)
    {
        $this->apis[] = $api;
    }

    public function setModels(Models $models)
    {
        $this->models = $models;
    }

    public function getModels()
    {
        return $this->models;
    }

    public function getModel($name)
    {
        return isset($this->models[$name]) ? $this->models[$name] : null;
    }

    public function addModel(Model $model)
    {
        $this->models[$model->getId()] = $model;
    }
}
