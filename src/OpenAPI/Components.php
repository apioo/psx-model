<?php

declare(strict_types = 1);

namespace PSX\Model\OpenAPI;

/**
 * @Description("Holds a set of reusable objects for different aspects of the OAS. All objects defined within the components object will have no effect on the API unless they are explicitly referenced from properties outside the components object.")
 */
class Components
{
    /**
     * @var Schemas|null
     */
    protected $schemas;
    /**
     * @var Responses|null
     */
    protected $responses;
    /**
     * @var Parameters|null
     */
    protected $parameters;
    /**
     * @var Examples|null
     */
    protected $examples;
    /**
     * @var RequestBodies|null
     */
    protected $requestBodies;
    /**
     * @var Headers|null
     */
    protected $headers;
    /**
     * @var SecuritySchemes|null
     */
    protected $securitySchemes;
    /**
     * @var Links|null
     */
    protected $links;
    /**
     * @var Callbacks|null
     */
    protected $callbacks;
    /**
     * @param Schemas|null $schemas
     */
    public function setSchemas(?Schemas $schemas) : void
    {
        $this->schemas = $schemas;
    }
    /**
     * @return Schemas|null
     */
    public function getSchemas() : ?Schemas
    {
        return $this->schemas;
    }
    /**
     * @param Responses|null $responses
     */
    public function setResponses(?Responses $responses) : void
    {
        $this->responses = $responses;
    }
    /**
     * @return Responses|null
     */
    public function getResponses() : ?Responses
    {
        return $this->responses;
    }
    /**
     * @param Parameters|null $parameters
     */
    public function setParameters(?Parameters $parameters) : void
    {
        $this->parameters = $parameters;
    }
    /**
     * @return Parameters|null
     */
    public function getParameters() : ?Parameters
    {
        return $this->parameters;
    }
    /**
     * @param Examples|null $examples
     */
    public function setExamples(?Examples $examples) : void
    {
        $this->examples = $examples;
    }
    /**
     * @return Examples|null
     */
    public function getExamples() : ?Examples
    {
        return $this->examples;
    }
    /**
     * @param RequestBodies|null $requestBodies
     */
    public function setRequestBodies(?RequestBodies $requestBodies) : void
    {
        $this->requestBodies = $requestBodies;
    }
    /**
     * @return RequestBodies|null
     */
    public function getRequestBodies() : ?RequestBodies
    {
        return $this->requestBodies;
    }
    /**
     * @param Headers|null $headers
     */
    public function setHeaders(?Headers $headers) : void
    {
        $this->headers = $headers;
    }
    /**
     * @return Headers|null
     */
    public function getHeaders() : ?Headers
    {
        return $this->headers;
    }
    /**
     * @param SecuritySchemes|null $securitySchemes
     */
    public function setSecuritySchemes(?SecuritySchemes $securitySchemes) : void
    {
        $this->securitySchemes = $securitySchemes;
    }
    /**
     * @return SecuritySchemes|null
     */
    public function getSecuritySchemes() : ?SecuritySchemes
    {
        return $this->securitySchemes;
    }
    /**
     * @param Links|null $links
     */
    public function setLinks(?Links $links) : void
    {
        $this->links = $links;
    }
    /**
     * @return Links|null
     */
    public function getLinks() : ?Links
    {
        return $this->links;
    }
    /**
     * @param Callbacks|null $callbacks
     */
    public function setCallbacks(?Callbacks $callbacks) : void
    {
        $this->callbacks = $callbacks;
    }
    /**
     * @return Callbacks|null
     */
    public function getCallbacks() : ?Callbacks
    {
        return $this->callbacks;
    }
}
