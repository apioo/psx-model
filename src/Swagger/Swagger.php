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
 * Swagger
 *
 * @author  Christoph Kappestein <christoph.kappestein@gmail.com>
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @link    http://phpsx.org
 */
class Swagger
{
    const VERSION = '2.0';

    /**
     * @Key("swagger")
     * @Description("The Swagger version of this document.")
     * @Enum({"2.0"})
     * @Type("string")
     */
    protected $swagger = self::VERSION;
    
    /**
     * @Key("info")
     * @Ref("PSX\Model\Swagger\Info")
     */
    protected $info;
    
    /**
     * @Key("host")
     * @Description("The host (name or ip) of the API. Example: 'swagger.io'")
     * @Type("string")
     * @Pattern("^[^{}/ :\\]+(?::\d+)?$")
     */
    protected $host;
    
    /**
     * @Key("basePath")
     * @Description("The base path to the API. Example: '/api'.")
     * @Type("string")
     * @Pattern("^/")
     */
    protected $basePath;
    
    /**
     * @Key("schemes")
     * @Description("The transfer protocol of the API.")
     * @Type("array")
     * @Items(@Schema(type="string", enum={"http", "https", "ws", "wss"}))
     * @UniqueItems(true)
     */
    protected $schemes;
    
    /**
     * @Key("consumes")
     * @Description("A list of MIME types accepted by the API.")
     * @Items(@Schema(type="string", description="The MIME type of the HTTP message."))
     */
    protected $consumes;
    
    /**
     * @Key("produces")
     * @Description("A list of MIME types the API can produce.")
     * @Items(@Schema(type="string", description="The MIME type of the HTTP message."))
     */
    protected $produces;
    
    /**
     * @Key("paths")
     * @Ref("PSX\Model\Swagger\Paths")
     */
    protected $paths;
    
    /**
     * @Key("definitions")
     */
    protected $definitions;
    
    /**
     * @Key("parameters")
     * @Ref("PSX\Model\Swagger\Parameters")
     */
    protected $parameters;
    
    /**
     * @Key("responses")
     * @Ref("PSX\Model\Swagger\Responses")
     */
    protected $responses;
    
    /**
     * @Key("security")
     * @Type("array")
     * @Items(@Ref("PSX\Model\Swagger\Security"))
     * @UniqueItems(true)
     */
    protected $security;
    
    /**
     * @Key("securityDefinitions")
     * @Ref("PSX\Model\Swagger\SecurityDefinitions")
     */
    protected $securityDefinitions;
    
    /**
     * @Key("tags")
     * @Type("array")
     * @Items(@Ref("PSX\Model\Swagger\Tag"))
     * @UniqueItems(true)
     */
    protected $tags;
    
    /**
     * @Key("externalDocs")
     * @Ref("PSX\Model\Swagger\ExternalDocs")
     */
    protected $externalDocs;
    
    public function __construct()
    {
        $this->paths = new Paths();
        $this->definitions = new \stdClass();
    }
    
    public function getSwagger()
    {
        return $this->swagger;
    }

    public function setInfo(Info $info)
    {
        $this->info = $info;
    }
    
    public function getInfo()
    {
        return $this->info;
    }
    
    public function setHost($host)
    {
        $this->host = $host;
    }
    
    public function getHost()
    {
        return $this->host;
    }
    
    public function setBasePath($basePath)
    {
        $this->basePath = $basePath;
    }
    
    public function getBasePath()
    {
        return $this->basePath;
    }
    
    public function setSchemes(array $schemes)
    {
        $this->schemes = $schemes;
    }
    
    public function getSchemes()
    {
        return $this->schemes;
    }
    
    public function setConsumes(array $consumes)
    {
        $this->consumes = $consumes;
    }
    
    public function getConsumes()
    {
        return $this->consumes;
    }
    
    public function setProduces(array $produces)
    {
        $this->produces = $produces;
    }
    
    public function getProduces()
    {
        return $this->produces;
    }
    
    public function setPaths(Paths $paths)
    {
        $this->paths = $paths;
    }
    
    public function getPaths()
    {
        return $this->paths;
    }
    
    public function addPath($path, Path $value)
    {
        $this->paths[$path] = $value;
    }
    
    public function setDefinitions(\stdClass $definitions)
    {
        $this->definitions = $definitions;
    }
    
    public function getDefinitions()
    {
        return $this->definitions;
    }
    
    public function addDefinition($name, \stdClass $schema)
    {
        $this->definitions->{$name} = $schema;
    }

    public function setParameters($parameters)
    {
        $this->parameters = $parameters;
    }
    
    public function getParameters()
    {
        return $this->parameters;
    }
    
    public function setResponses($responses)
    {
        $this->responses = $responses;
    }
    
    public function getResponses()
    {
        return $this->responses;
    }
    
    public function setSecurity(Security $security)
    {
        $this->security = $security;
    }
    
    public function getSecurity()
    {
        return $this->security;
    }
    
    public function setSecurityDefinitions(SecurityDefinitions $securityDefinitions)
    {
        $this->securityDefinitions = $securityDefinitions;
    }
    
    public function getSecurityDefinitions()
    {
        return $this->securityDefinitions;
    }
    
    public function setTags(array $tags)
    {
        $this->tags = $tags;
    }
    
    public function getTags()
    {
        return $this->tags;
    }
    
    public function setExternalDocs(ExternalDocs $externalDocs)
    {
        $this->externalDocs = $externalDocs;
    }
    
    public function getExternalDocs()
    {
        return $this->externalDocs;
    }
}
