<?php

declare(strict_types = 1);

namespace PSX\Model\OpenRPC;

/**
 * @Description("Holds a set of reusable objects for different aspects of the OpenRPC. All objects defined within the components object will have no effect on the API unless they are explicitly referenced from properties outside the components object.")
 */
class Components implements \JsonSerializable
{
    /**
     * @var ContentDescriptors|null
     */
    protected $contentDescriptors;
    /**
     * @var \PSX\Model\OpenAPI\Schemas|null
     */
    protected $schemas;
    /**
     * @var \PSX\Model\OpenAPI\Examples|null
     */
    protected $examples;
    /**
     * @var Links|null
     */
    protected $links;
    /**
     * @var Errors|null
     */
    protected $errors;
    /**
     * @var ExamplePairingObjects|null
     */
    protected $examplePairingObjects;
    /**
     * @var Tags|null
     */
    protected $tags;
    /**
     * @param ContentDescriptors|null $contentDescriptors
     */
    public function setContentDescriptors(?ContentDescriptors $contentDescriptors) : void
    {
        $this->contentDescriptors = $contentDescriptors;
    }
    /**
     * @return ContentDescriptors|null
     */
    public function getContentDescriptors() : ?ContentDescriptors
    {
        return $this->contentDescriptors;
    }
    /**
     * @param \PSX\Model\OpenAPI\Schemas|null $schemas
     */
    public function setSchemas(?\PSX\Model\OpenAPI\Schemas $schemas) : void
    {
        $this->schemas = $schemas;
    }
    /**
     * @return \PSX\Model\OpenAPI\Schemas|null
     */
    public function getSchemas() : ?\PSX\Model\OpenAPI\Schemas
    {
        return $this->schemas;
    }
    /**
     * @param \PSX\Model\OpenAPI\Examples|null $examples
     */
    public function setExamples(?\PSX\Model\OpenAPI\Examples $examples) : void
    {
        $this->examples = $examples;
    }
    /**
     * @return \PSX\Model\OpenAPI\Examples|null
     */
    public function getExamples() : ?\PSX\Model\OpenAPI\Examples
    {
        return $this->examples;
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
     * @param Errors|null $errors
     */
    public function setErrors(?Errors $errors) : void
    {
        $this->errors = $errors;
    }
    /**
     * @return Errors|null
     */
    public function getErrors() : ?Errors
    {
        return $this->errors;
    }
    /**
     * @param ExamplePairingObjects|null $examplePairingObjects
     */
    public function setExamplePairingObjects(?ExamplePairingObjects $examplePairingObjects) : void
    {
        $this->examplePairingObjects = $examplePairingObjects;
    }
    /**
     * @return ExamplePairingObjects|null
     */
    public function getExamplePairingObjects() : ?ExamplePairingObjects
    {
        return $this->examplePairingObjects;
    }
    /**
     * @param Tags|null $tags
     */
    public function setTags(?Tags $tags) : void
    {
        $this->tags = $tags;
    }
    /**
     * @return Tags|null
     */
    public function getTags() : ?Tags
    {
        return $this->tags;
    }
    public function jsonSerialize()
    {
        return (object) array_filter(array('contentDescriptors' => $this->contentDescriptors, 'schemas' => $this->schemas, 'examples' => $this->examples, 'links' => $this->links, 'errors' => $this->errors, 'examplePairingObjects' => $this->examplePairingObjects, 'tags' => $this->tags), static function ($value) : bool {
            return $value !== null;
        });
    }
}
