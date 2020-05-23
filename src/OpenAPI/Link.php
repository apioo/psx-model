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
 * @Title("Link")
 * @Description("The `Link object` represents a possible design-time link for a response. The presence of a link does not guarantee the caller's ability to successfully invoke it, rather it provides a known relationship and traversal mechanism between responses and other operations.  Unlike _dynamic_ links (i.e. links provided **in** the response payload), the OAS linking mechanism does not require link information in the runtime response.  For computing links, and providing instructions to execute them, a runtime expression is used for accessing values in an operation and using them as parameters while invoking the linked operation.")
 */
class Link
{
    /**
     * @Key("operationRef")
     * @var string
     */
    protected $operationRef;
    
    /**
     * @Key("operationId")
     * @var string
     */
    protected $operationId;
    
    /**
     * @Key("parameters")
     * @var object
     */
    protected $parameters;
    
    /**
     * @Key("requestBody")
     */
    protected $requestBody;
    
    /**
     * @Key("description")
     * @var string
     */
    protected $description;
    
    /**
     * @Key("server")
     * @var \PSX\Model\OpenAPI\Server
     */
    protected $server;

    public function setOperationRef(string $operationRef)
    {
        $this->operationRef = $operationRef;
    }

    public function getOperationRef(): ?string
    {
        return $this->operationRef;
    }

    public function setOperationId(string $operationId)
    {
        $this->operationId = $operationId;
    }

    public function getOperationId(): ?string
    {
        return $this->operationId;
    }

    public function setParameters($parameters)
    {
        $this->parameters = $parameters;
    }

    public function getParameters()
    {
        return $this->parameters;
    }

    public function setRequestBody($requestBody)
    {
        $this->requestBody = $requestBody;
    }

    public function getRequestBody()
    {
        return $this->requestBody;
    }

    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setServer(Server $server)
    {
        $this->server = $server;
    }

    public function getServer(): ?Server
    {
        return $this->server;
    }
}
