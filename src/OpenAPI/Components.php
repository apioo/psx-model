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
 * @Title("Components")
 * @Description("Holds a set of reusable objects for different aspects of the OAS. All objects defined within the components object will have no effect on the API unless they are explicitly referenced from properties outside the components object.")
 * @PatternProperties(pattern="^x-", property=@Schema(description="Any property starting with x- is valid."))
 * @AdditionalProperties(false)
 */
class Components extends \ArrayObject
{
    /**
     * @Key("schemas")
     * @Type("object")
     */
    protected $schemas;
    
    /**
     * @Key("responses")
     * @OneOf(@Ref("PSX\Model\OpenAPI\Response"), @Ref("PSX\Model\OpenAPI\Reference"))
     */
    protected $responses;
    
    /**
     * @Key("parameters")
     * @OneOf(@Ref("PSX\Model\OpenAPI\Parameter"), @Ref("PSX\Model\OpenAPI\Reference"))
     */
    protected $parameters;
    
    /**
     * @Key("examples")
     * @OneOf(@Ref("PSX\Model\OpenAPI\Example"), @Ref("PSX\Model\OpenAPI\Reference"))
     */
    protected $examples;
    
    /**
     * @Key("requestBodies")
     * @OneOf(@Ref("PSX\Model\OpenAPI\RequestBody"), @Ref("PSX\Model\OpenAPI\Reference"))
     */
    protected $requestBodies;
    
    /**
     * @Key("headers")
     * @OneOf(@Ref("PSX\Model\OpenAPI\Header"), @Ref("PSX\Model\OpenAPI\Reference"))
     */
    protected $headers;
    
    /**
     * @Key("securitySchemes")
     * @OneOf(@Ref("PSX\Model\OpenAPI\SecurityScheme"), @Ref("PSX\Model\OpenAPI\Reference"))
     */
    protected $securitySchemes;
    
    /**
     * @Key("links")
     * @OneOf(@Ref("PSX\Model\OpenAPI\Link"), @Ref("PSX\Model\OpenAPI\Reference"))
     */
    protected $links;
    
    /**
     * @Key("callbacks")
     * @OneOf(@Ref("PSX\Model\OpenAPI\Callback"), @Ref("PSX\Model\OpenAPI\Reference"))
     */
    protected $callbacks;

    public function setSchemas($schemas)
    {
        $this->schemas = $schemas;
    }

    public function getSchemas()
    {
        return $this->schemas;
    }

    public function setResponses($responses)
    {
        $this->responses = $responses;
    }

    public function getResponses()
    {
        return $this->responses;
    }

    public function setParameters($parameters)
    {
        $this->parameters = $parameters;
    }

    public function getParameters()
    {
        return $this->parameters;
    }

    public function setExamples($examples)
    {
        $this->examples = $examples;
    }

    public function getExamples()
    {
        return $this->examples;
    }

    public function setRequestBodies($requestBodies)
    {
        $this->requestBodies = $requestBodies;
    }

    public function getRequestBodies()
    {
        return $this->requestBodies;
    }

    public function setHeaders($headers)
    {
        $this->headers = $headers;
    }

    public function getHeaders()
    {
        return $this->headers;
    }

    public function setSecuritySchemes($securitySchemes)
    {
        $this->securitySchemes = $securitySchemes;
    }

    public function getSecuritySchemes()
    {
        return $this->securitySchemes;
    }

    public function setLinks($links)
    {
        $this->links = $links;
    }

    public function getLinks()
    {
        return $this->links;
    }

    public function setCallbacks($callbacks)
    {
        $this->callbacks = $callbacks;
    }

    public function getCallbacks()
    {
        return $this->callbacks;
    }
}
