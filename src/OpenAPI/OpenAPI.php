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
 * @Title("OpenAPI")
 * @Description("This is the root document object of the OpenAPI definition file.")
 * @PatternProperties(pattern="^x-", property=@Schema(description="Any property starting with x- is valid."))
 * @AdditionalProperties(false)
 * @Required({"openapi", "info", "paths"})
 */
class OpenAPI extends \ArrayObject
{
    /**
     * @Key("openapi")
     * @Type("string")
     */
    protected $openapi = '3.0.0';

    /**
     * @Key("info")
     * @Ref("PSX\Model\OpenAPI\Info")
     */
    protected $info;
    
    /**
     * @Key("servers")
     * @Type("array")
     * @Items(@Ref("PSX\Model\OpenAPI\Server"))
     * @UniqueItems(true)
     */
    protected $servers;
    
    /**
     * @Key("paths")
     * @Ref("PSX\Model\OpenAPI\Paths")
     */
    protected $paths;
    
    /**
     * @Key("components")
     * @Ref("PSX\Model\OpenAPI\Components")
     */
    protected $components;
    
    /**
     * @Key("security")
     * @Type("array")
     * @Items(@Ref("PSX\Model\OpenAPI\SecurityRequirement"))
     * @UniqueItems(true)
     */
    protected $security;
    
    /**
     * @Key("tags")
     * @Type("array")
     * @Items(@Ref("PSX\Model\OpenAPI\Tag"))
     * @UniqueItems(true)
     */
    protected $tags;
    
    /**
     * @Key("externalDocs")
     * @Ref("PSX\Model\OpenAPI\ExternalDocs")
     */
    protected $externalDocs;

    public function setOpenapi($openapi)
    {
        $this->openapi = $openapi;
    }

    public function getOpenapi()
    {
        return $this->openapi;
    }

    public function setInfo(Info $info)
    {
        $this->info = $info;
    }

    public function getInfo()
    {
        return $this->info;
    }

    public function setServers(array $servers)
    {
        $this->servers = $servers;
    }

    public function getServers()
    {
        return $this->servers;
    }

    public function setPaths(Paths $paths)
    {
        $this->paths = $paths;
    }

    public function getPaths()
    {
        return $this->paths;
    }

    public function setComponents(Components $components)
    {
        $this->components = $components;
    }

    public function getComponents()
    {
        return $this->components;
    }

    public function setSecurity(array $security)
    {
        $this->security = $security;
    }

    public function getSecurity()
    {
        return $this->security;
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
