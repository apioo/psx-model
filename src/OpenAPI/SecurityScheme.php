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
 * @Title("SecurityScheme")
 * @Description("Defines a security scheme that can be used by the operations. Supported schemes are HTTP authentication, an API key (either as a header or as a query parameter) and OAuth2's common flows (implicit, password, application and access code).")
 * @Required({"type"})
 */
class SecurityScheme
{
    /**
     * @Key("type")
     * @var string
     */
    protected $type;
    
    /**
     * @Key("description")
     * @var string
     */
    protected $description;
    
    /**
     * @Key("name")
     * @var string
     */
    protected $name;
    
    /**
     * @Key("in")
     * @var string
     */
    protected $in;
    
    /**
     * @Key("scheme")
     * @var string
     */
    protected $scheme;
    
    /**
     * @Key("bearerFormat")
     * @var string
     */
    protected $bearerFormat;
    
    /**
     * @Key("flows")
     * @var \PSX\Model\OpenAPI\OauthFlows
     */
    protected $flows;
    
    /**
     * @Key("openIdConnectUrl")
     * @var string
     */
    protected $openIdConnectUrl;

    public function setType(string $type)
    {
        $this->type = $type;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setIn(string $in)
    {
        $this->in = $in;
    }

    public function getIn(): ?string
    {
        return $this->in;
    }

    public function setScheme(string $scheme)
    {
        $this->scheme = $scheme;
    }

    public function getScheme(): ?string
    {
        return $this->scheme;
    }

    public function setBearerFormat(string $bearerFormat)
    {
        $this->bearerFormat = $bearerFormat;
    }

    public function getBearerFormat(): ?string
    {
        return $this->bearerFormat;
    }

    public function setFlows(OauthFlows $flows)
    {
        $this->flows = $flows;
    }

    public function getFlows(): ?OauthFlows
    {
        return $this->flows;
    }

    public function setOpenIdConnectUrl(string $openIdConnectUrl)
    {
        $this->openIdConnectUrl = $openIdConnectUrl;
    }

    public function getOpenIdConnectUrl(): ?string
    {
        return $this->openIdConnectUrl;
    }
}
