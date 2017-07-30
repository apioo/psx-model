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
 * @Title("OauthFlows")
 * @Description("Allows configuration of the supported OAuth Flows.")
 * @PatternProperties(pattern="^x-", property=@Schema(description="Any property starting with x- is valid."))
 * @AdditionalProperties(false)
 */
class OauthFlows extends \ArrayObject
{
    /**
     * @Key("implicit")
     * @Ref("PSX\Model\OpenAPI\OauthFlow")
     */
    protected $implicit;
    
    /**
     * @Key("password")
     * @Ref("PSX\Model\OpenAPI\OauthFlow")
     */
    protected $password;
    
    /**
     * @Key("clientCredentials")
     * @Ref("PSX\Model\OpenAPI\OauthFlow")
     */
    protected $clientCredentials;
    
    /**
     * @Key("authorizationCode")
     * @Ref("PSX\Model\OpenAPI\OauthFlow")
     */
    protected $authorizationCode;

    public function setImplicit(OauthFlow $implicit)
    {
        $this->implicit = $implicit;
    }

    public function getImplicit()
    {
        return $this->implicit;
    }

    public function setPassword(OauthFlow $password)
    {
        $this->password = $password;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setClientCredentials(OauthFlow $clientCredentials)
    {
        $this->clientCredentials = $clientCredentials;
    }

    public function getClientCredentials()
    {
        return $this->clientCredentials;
    }

    public function setAuthorizationCode(OauthFlow $authorizationCode)
    {
        $this->authorizationCode = $authorizationCode;
    }

    public function getAuthorizationCode()
    {
        return $this->authorizationCode;
    }
}
