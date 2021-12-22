<?php

declare(strict_types = 1);

namespace PSX\Model\OpenAPI;

use PSX\Schema\Attribute\Description;

#[Description('Each Media Type Object provides schema and examples for the media type identified by its key.')]
class MediaType implements \JsonSerializable
{
    protected ?mixed $schema = null;
    protected ?mixed $example = null;
    protected ?Examples $examples = null;
    protected ?Encodings $encoding = null;
    public function setSchema(?mixed $schema) : void
    {
        $this->schema = $schema;
    }
    public function getSchema() : ?mixed
    {
        return $this->schema;
    }
    public function setExample(?mixed $example) : void
    {
        $this->example = $example;
    }
    public function getExample() : ?mixed
    {
        return $this->example;
    }
    public function setExamples(?Examples $examples) : void
    {
        $this->examples = $examples;
    }
    public function getExamples() : ?Examples
    {
        return $this->examples;
    }
    public function setEncoding(?Encodings $encoding) : void
    {
        $this->encoding = $encoding;
    }
    public function getEncoding() : ?Encodings
    {
        return $this->encoding;
    }
    public function jsonSerialize()
    {
        return (object) array_filter(array('schema' => $this->schema, 'example' => $this->example, 'examples' => $this->examples, 'encoding' => $this->encoding), static function ($value) : bool {
            return $value !== null;
        });
    }
}

