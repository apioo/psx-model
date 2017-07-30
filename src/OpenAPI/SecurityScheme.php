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
 * @Title("SecurityScheme")
 * @Description("Defines a security scheme that can be used by the operations. Supported schemes are HTTP authentication, an API key (either as a header or as a query parameter) and OAuth2's common flows (implicit, password, application and access code).")
 * @PatternProperties(pattern="^x-", property=@Schema(description="Any property starting with x- is valid."))
 * @AdditionalProperties(false)
 * @Required({"type"})
 */
class SecurityScheme extends \ArrayObject
{
    /**
     * @Key("type")
     * @Type("string")
     */
    protected $type;
    
    /**
     * @Key("description")
     * @Type("string")
     */
    protected $description;
    
    /**
     * @Key("name")
     * @Type("string")
     */
    protected $name;
    
    /**
     * @Key("in")
     * @Type("string")
     */
    protected $in;
    
    /**
     * @Key("scheme")
     * @Type("string")
     */
    protected $scheme;
    
    /**
     * @Key("bearerFormat")
     * @Type("string")
     */
    protected $bearerFormat;
    
    /**
     * @Key("flows")
     * @Ref("PSX\Model\OpenAPI\OauthFlows")
     */
    protected $flows;
    
    /**
     * @Key("openIdConnectUrl")
     * @Type("string")
     */
    protected $openIdConnectUrl;

    public function setType($type)
    {
        $this->type = $type;
    }

    public function getType()
    {
        return $this->type;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setIn($in)
    {
        $this->in = $in;
    }

    public function getIn()
    {
        return $this->in;
    }

    public function setScheme($scheme)
    {
        $this->scheme = $scheme;
    }

    public function getScheme()
    {
        return $this->scheme;
    }

    public function setBearerFormat($bearerFormat)
    {
        $this->bearerFormat = $bearerFormat;
    }

    public function getBearerFormat()
    {
        return $this->bearerFormat;
    }

    public function setFlows(OauthFlows $flows)
    {
        $this->flows = $flows;
    }

    public function getFlows()
    {
        return $this->flows;
    }

    public function setOpenIdConnectUrl($openIdConnectUrl)
    {
        $this->openIdConnectUrl = $openIdConnectUrl;
    }

    public function getOpenIdConnectUrl()
    {
        return $this->openIdConnectUrl;
    }
}
