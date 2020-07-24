<?php

declare(strict_types = 1);

namespace PSX\Model\OpenAPI;

/**
 * @Description("Each Media Type Object provides schema and examples for the media type identified by its key.")
 */
class MediaType implements \JsonSerializable
{
    /**
     * @var mixed|null
     */
    protected $schema;
    /**
     * @var mixed|null
     */
    protected $example;
    /**
     * @var Examples|null
     */
    protected $examples;
    /**
     * @var Encodings|null
     */
    protected $encoding;
    /**
     * @param mixed|null $schema
     */
    public function setSchema($schema) : void
    {
        $this->schema = $schema;
    }
    /**
     * @return mixed|null
     */
    public function getSchema()
    {
        return $this->schema;
    }
    /**
     * @param mixed|null $example
     */
    public function setExample($example) : void
    {
        $this->example = $example;
    }
    /**
     * @return mixed|null
     */
    public function getExample()
    {
        return $this->example;
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
     * @param Encodings|null $encoding
     */
    public function setEncoding(?Encodings $encoding) : void
    {
        $this->encoding = $encoding;
    }
    /**
     * @return Encodings|null
     */
    public function getEncoding() : ?Encodings
    {
        return $this->encoding;
    }
    public function jsonSerialize()
    {
        return array_filter(array('schema' => $this->schema, 'example' => $this->example, 'examples' => $this->examples, 'encoding' => $this->encoding), static function ($value) : bool {
            return $value !== null;
        });
    }
}
