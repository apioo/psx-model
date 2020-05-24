<?php

declare(strict_types = 1);

namespace PSX\Model\OpenAPI;

/**
 * @Description("Each Media Type Object provides schema and examples for the media type identified by its key.")
 */
class MediaType
{
    /**
     * @var mixed
     */
    protected $schema;
    /**
     * @var mixed
     */
    protected $example;
    /**
     * @var Examples
     */
    protected $examples;
    /**
     * @var Encodings
     */
    protected $encoding;
    /**
     * @param mixed $schema
     */
    public function setSchema($schema)
    {
        $this->schema = $schema;
    }
    /**
     * @return mixed
     */
    public function getSchema()
    {
        return $this->schema;
    }
    /**
     * @param mixed $example
     */
    public function setExample($example)
    {
        $this->example = $example;
    }
    /**
     * @return mixed
     */
    public function getExample()
    {
        return $this->example;
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
     * @param Encodings $encoding
     */
    public function setEncoding(?Encodings $encoding)
    {
        $this->encoding = $encoding;
    }
    /**
     * @return Encodings
     */
    public function getEncoding() : ?Encodings
    {
        return $this->encoding;
    }
}
