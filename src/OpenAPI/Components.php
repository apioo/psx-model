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
 * @Title("Components")
 * @Description("Holds a set of reusable objects for different aspects of the OAS. All objects defined within the components object will have no effect on the API unless they are explicitly referenced from properties outside the components object.")
 */
class Components
{
    /**
     * @Key("schemas")
     * @var object
     */
    protected $schemas;

    /**
     * @Key("responses")
     * @var \PSX\Model\OpenAPI\Response|\PSX\Model\OpenAPI\Reference
     */
    protected $responses;
    
    /**
     * @Key("parameters")
     * @var \PSX\Model\OpenAPI\Parameter|\PSX\Model\OpenAPI\Reference
     */
    protected $parameters;

    /**
     * @Key("examples")
     * @var \PSX\Model\OpenAPI\Example|\PSX\Model\OpenAPI\Reference
     */
    protected $examples;
    
    /**
     * @Key("requestBodies")
     * @var \PSX\Model\OpenAPI\RequestBody|\PSX\Model\OpenAPI\Reference
     */
    protected $requestBodies;
    
    /**
     * @Key("headers")
     * @var \PSX\Model\OpenAPI\Header|\PSX\Model\OpenAPI\Reference
     */
    protected $headers;
    
    /**
     * @Key("securitySchemes")
     * @var \PSX\Model\OpenAPI\SecuritySchemes
     */
    protected $securitySchemes;
    
    /**
     * @Key("links")
     * @var \PSX\Model\OpenAPI\Link|\PSX\Model\OpenAPI\Reference
     */
    protected $links;
    
    /**
     * @Key("callbacks")
     * @var \PSX\Model\OpenAPI\Callback|\PSX\Model\OpenAPI\Reference
     */
    protected $callbacks;

    public function setSchemas($schemas)
    {
        $this->schemas = $schemas;
    }

    /**
     * @return object
     */
    public function getSchemas()
    {
        return $this->schemas;
    }

    public function setResponses($responses)
    {
        $this->responses = $responses;
    }

    /**
     * @return Reference|Response
     */
    public function getResponses()
    {
        return $this->responses;
    }

    public function setParameters($parameters)
    {
        $this->parameters = $parameters;
    }

    /**
     * @return Parameter|Reference
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    public function setExamples($examples)
    {
        $this->examples = $examples;
    }

    /**
     * @return Example|Reference
     */
    public function getExamples()
    {
        return $this->examples;
    }

    public function setRequestBodies($requestBodies)
    {
        $this->requestBodies = $requestBodies;
    }

    /**
     * @return Reference|RequestBody
     */
    public function getRequestBodies()
    {
        return $this->requestBodies;
    }

    public function setHeaders($headers)
    {
        $this->headers = $headers;
    }

    /**
     * @return Header|Reference
     */
    public function getHeaders()
    {
        return $this->headers;
    }

    public function setSecuritySchemes(SecuritySchemes $securitySchemes)
    {
        $this->securitySchemes = $securitySchemes;
    }

    public function getSecuritySchemes(): ?SecuritySchemes
    {
        return $this->securitySchemes;
    }

    public function setLinks($links)
    {
        $this->links = $links;
    }

    /**
     * @return Link|Reference
     */
    public function getLinks()
    {
        return $this->links;
    }

    public function setCallbacks($callbacks)
    {
        $this->callbacks = $callbacks;
    }

    /**
     * @return Callback|Reference
     */
    public function getCallbacks()
    {
        return $this->callbacks;
    }
}
