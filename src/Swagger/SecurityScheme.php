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
 * SecurityScheme
 *
 * @author  Christoph Kappestein <christoph.kappestein@gmail.com>
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @link    http://phpsx.org
 * @AdditionalProperties(false)
 * @Required({"type", "flow", "authorizationUrl", "tokenUrl"})
 */
class SecurityScheme
{
    /**
     * @Key("type")
     * @Enum({"oauth2"})
     * @Type("string")
     */
    protected $type;
    
    /**
     * @Key("flow")
     * @Enum({"accessCode"})
     * @Type("string")
     */
    protected $flow;
    
    /**
     * @Key("scopes")
     * @Ref("PSX\Generation\Objectc1d44070")
     */
    protected $scopes;
    
    /**
     * @Key("authorizationUrl")
     * @Type("string")
     * @Format("uri")
     */
    protected $authorizationUrl;
    
    /**
     * @Key("tokenUrl")
     * @Type("string")
     * @Format("uri")
     */
    protected $tokenUrl;
    
    /**
     * @Key("description")
     * @Type("string")
     */
    protected $description;
    
    public function setType($type)
    {
        $this->type = $type;
    }
    
    public function getType()
    {
        return $this->type;
    }
    
    public function setFlow($flow)
    {
        $this->flow = $flow;
    }
    
    public function getFlow()
    {
        return $this->flow;
    }
    
    public function setScopes($scopes)
    {
        $this->scopes = $scopes;
    }
    
    public function getScopes()
    {
        return $this->scopes;
    }
    
    public function setAuthorizationUrl($authorizationUrl)
    {
        $this->authorizationUrl = $authorizationUrl;
    }
    
    public function getAuthorizationUrl()
    {
        return $this->authorizationUrl;
    }
    
    public function setTokenUrl($tokenUrl)
    {
        $this->tokenUrl = $tokenUrl;
    }
    
    public function getTokenUrl()
    {
        return $this->tokenUrl;
    }
    
    public function setDescription($description)
    {
        $this->description = $description;
    }
    
    public function getDescription()
    {
        return $this->description;
    }
}
