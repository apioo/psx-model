<?php

declare(strict_types = 1);

namespace PSX\Model\OpenRPC;

use PSX\Schema\Attribute\Description;

#[Description('Holds a set of reusable objects for different aspects of the OpenRPC. All objects defined within the components object will have no effect on the API unless they are explicitly referenced from properties outside the components object.')]
class Components implements \JsonSerializable
{
    protected ?ContentDescriptors $contentDescriptors = null;
    protected ?\PSX\Model\OpenAPI\Schemas $schemas = null;
    protected ?\PSX\Model\OpenAPI\Examples $examples = null;
    protected ?Links $links = null;
    protected ?Errors $errors = null;
    protected ?ExamplePairingObjects $examplePairingObjects = null;
    protected ?Tags $tags = null;
    public function setContentDescriptors(?ContentDescriptors $contentDescriptors) : void
    {
        $this->contentDescriptors = $contentDescriptors;
    }
    public function getContentDescriptors() : ?ContentDescriptors
    {
        return $this->contentDescriptors;
    }
    public function setSchemas(?\PSX\Model\OpenAPI\Schemas $schemas) : void
    {
        $this->schemas = $schemas;
    }
    public function getSchemas() : ?\PSX\Model\OpenAPI\Schemas
    {
        return $this->schemas;
    }
    public function setExamples(?\PSX\Model\OpenAPI\Examples $examples) : void
    {
        $this->examples = $examples;
    }
    public function getExamples() : ?\PSX\Model\OpenAPI\Examples
    {
        return $this->examples;
    }
    public function setLinks(?Links $links) : void
    {
        $this->links = $links;
    }
    public function getLinks() : ?Links
    {
        return $this->links;
    }
    public function setErrors(?Errors $errors) : void
    {
        $this->errors = $errors;
    }
    public function getErrors() : ?Errors
    {
        return $this->errors;
    }
    public function setExamplePairingObjects(?ExamplePairingObjects $examplePairingObjects) : void
    {
        $this->examplePairingObjects = $examplePairingObjects;
    }
    public function getExamplePairingObjects() : ?ExamplePairingObjects
    {
        return $this->examplePairingObjects;
    }
    public function setTags(?Tags $tags) : void
    {
        $this->tags = $tags;
    }
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

