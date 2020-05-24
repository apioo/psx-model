<?php

declare(strict_types = 1);

namespace PSX\Model\OpenAPI;

/**
 * @Description("Holds a set of reusable objects for different aspects of the OAS. All objects defined within the components object will have no effect on the API unless they are explicitly referenced from properties outside the components object.")
 */
class Components
{
    /**
     * @var Schemas
     */
    protected $schemas;
    /**
     * @var Responses
     */
    protected $responses;
    /**
     * @var Parameters
     */
    protected $parameters;
    /**
     * @var Examples
     */
    protected $examples;
    /**
     * @var RequestBodies
     */
    protected $requestBodies;
    /**
     * @var Headers
     */
    protected $headers;
    /**
     * @var SecuritySchemes
     */
    protected $securitySchemes;
    /**
     * @var Links
     */
    protected $links;
    /**
     * @var Callbacks
     */
    protected $callbacks;
    /**
     * @param Schemas $schemas
     */
    public function setSchemas(?Schemas $schemas)
    {
        $this->schemas = $schemas;
    }
    /**
     * @return Schemas
     */
    public function getSchemas() : ?Schemas
    {
        return $this->schemas;
    }
    /**
     * @param Responses $responses
     */
    public function setResponses(?Responses $responses)
    {
        $this->responses = $responses;
    }
    /**
     * @return Responses
     */
    public function getResponses() : ?Responses
    {
        return $this->responses;
    }
    /**
     * @param Parameters $parameters
     */
    public function setParameters(?Parameters $parameters)
    {
        $this->parameters = $parameters;
    }
    /**
     * @return Parameters
     */
    public function getParameters() : ?Parameters
    {
        return $this->parameters;
    }
    /**
     * @param Examples $examples
     */
    public function setExamples(?Examples $examples)
    {
        $this->examples = $examples;
    }
    /**
     * @return Examples
     */
    public function getExamples() : ?Examples
    {
        return $this->examples;
    }
    /**
     * @param RequestBodies $requestBodies
     */
    public function setRequestBodies(?RequestBodies $requestBodies)
    {
        $this->requestBodies = $requestBodies;
    }
    /**
     * @return RequestBodies
     */
    public function getRequestBodies() : ?RequestBodies
    {
        return $this->requestBodies;
    }
    /**
     * @param Headers $headers
     */
    public function setHeaders(?Headers $headers)
    {
        $this->headers = $headers;
    }
    /**
     * @return Headers
     */
    public function getHeaders() : ?Headers
    {
        return $this->headers;
    }
    /**
     * @param SecuritySchemes $securitySchemes
     */
    public function setSecuritySchemes(?SecuritySchemes $securitySchemes)
    {
        $this->securitySchemes = $securitySchemes;
    }
    /**
     * @return SecuritySchemes
     */
    public function getSecuritySchemes() : ?SecuritySchemes
    {
        return $this->securitySchemes;
    }
    /**
     * @param Links $links
     */
    public function setLinks(?Links $links)
    {
        $this->links = $links;
    }
    /**
     * @return Links
     */
    public function getLinks() : ?Links
    {
        return $this->links;
    }
    /**
     * @param Callbacks $callbacks
     */
    public function setCallbacks(?Callbacks $callbacks)
    {
        $this->callbacks = $callbacks;
    }
    /**
     * @return Callbacks
     */
    public function getCallbacks() : ?Callbacks
    {
        return $this->callbacks;
    }
}
