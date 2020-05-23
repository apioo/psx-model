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
 * @Title("OauthFlow")
 * @Description("Configuration details for a supported OAuth Flow")
 */
class OauthFlow
{
    /**
     * @Key("authorizationUrl")
     * @var string
     */
    protected $authorizationUrl;
    
    /**
     * @Key("tokenUrl")
     * @var string
     */
    protected $tokenUrl;
    
    /**
     * @Key("refreshUrl")
     * @var string
     */
    protected $refreshUrl;
    
    /**
     * @Key("scopes")
     * @var \PSX\Model\OpenAPI\Scopes
     */
    protected $scopes;

    public function setAuthorizationUrl(string $authorizationUrl)
    {
        $this->authorizationUrl = $authorizationUrl;
    }

    public function getAuthorizationUrl(): ?string
    {
        return $this->authorizationUrl;
    }

    public function setTokenUrl(string $tokenUrl)
    {
        $this->tokenUrl = $tokenUrl;
    }

    public function getTokenUrl(): ?string
    {
        return $this->tokenUrl;
    }

    public function setRefreshUrl(string $refreshUrl)
    {
        $this->refreshUrl = $refreshUrl;
    }

    public function getRefreshUrl(): ?string
    {
        return $this->refreshUrl;
    }

    public function setScopes(Scopes $scopes)
    {
        $this->scopes = $scopes;
    }

    public function getScopes(): ?Scopes
    {
        return $this->scopes;
    }
}
