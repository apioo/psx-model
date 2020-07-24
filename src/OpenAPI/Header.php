<?php

declare(strict_types = 1);

namespace PSX\Model\OpenAPI;

/**
 * @Description("The Header Object follows the structure of the Parameter Object with the following changes:  1. `name` MUST NOT be specified, it is given in the corresponding `headers` map. 1. `in` MUST NOT be specified, it is implicitly in `header`. 1. All traits that are affected by the location MUST be applicable to a location of `header` (for example, `style`).")
 */
class Header implements \JsonSerializable
{
    /**
     * @var string|null
     */
    protected $description;
    /**
     * @var bool|null
     */
    protected $required;
    /**
     * @var bool|null
     */
    protected $deprecated;
    /**
     * @var bool|null
     */
    protected $allowEmptyValue;
    /**
     * @var string|null
     */
    protected $style;
    /**
     * @var bool|null
     */
    protected $explode;
    /**
     * @var bool|null
     */
    protected $allowReserved;
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
     * @var MediaTypes|null
     */
    protected $content;
    /**
     * @param string|null $description
     */
    public function setDescription(?string $description) : void
    {
        $this->description = $description;
    }
    /**
     * @return string|null
     */
    public function getDescription() : ?string
    {
        return $this->description;
    }
    /**
     * @param bool|null $required
     */
    public function setRequired(?bool $required) : void
    {
        $this->required = $required;
    }
    /**
     * @return bool|null
     */
    public function getRequired() : ?bool
    {
        return $this->required;
    }
    /**
     * @param bool|null $deprecated
     */
    public function setDeprecated(?bool $deprecated) : void
    {
        $this->deprecated = $deprecated;
    }
    /**
     * @return bool|null
     */
    public function getDeprecated() : ?bool
    {
        return $this->deprecated;
    }
    /**
     * @param bool|null $allowEmptyValue
     */
    public function setAllowEmptyValue(?bool $allowEmptyValue) : void
    {
        $this->allowEmptyValue = $allowEmptyValue;
    }
    /**
     * @return bool|null
     */
    public function getAllowEmptyValue() : ?bool
    {
        return $this->allowEmptyValue;
    }
    /**
     * @param string|null $style
     */
    public function setStyle(?string $style) : void
    {
        $this->style = $style;
    }
    /**
     * @return string|null
     */
    public function getStyle() : ?string
    {
        return $this->style;
    }
    /**
     * @param bool|null $explode
     */
    public function setExplode(?bool $explode) : void
    {
        $this->explode = $explode;
    }
    /**
     * @return bool|null
     */
    public function getExplode() : ?bool
    {
        return $this->explode;
    }
    /**
     * @param bool|null $allowReserved
     */
    public function setAllowReserved(?bool $allowReserved) : void
    {
        $this->allowReserved = $allowReserved;
    }
    /**
     * @return bool|null
     */
    public function getAllowReserved() : ?bool
    {
        return $this->allowReserved;
    }
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
     * @param MediaTypes|null $content
     */
    public function setContent(?MediaTypes $content) : void
    {
        $this->content = $content;
    }
    /**
     * @return MediaTypes|null
     */
    public function getContent() : ?MediaTypes
    {
        return $this->content;
    }
    public function jsonSerialize()
    {
        return (object) array_filter(array('description' => $this->description, 'required' => $this->required, 'deprecated' => $this->deprecated, 'allowEmptyValue' => $this->allowEmptyValue, 'style' => $this->style, 'explode' => $this->explode, 'allowReserved' => $this->allowReserved, 'schema' => $this->schema, 'example' => $this->example, 'examples' => $this->examples, 'content' => $this->content), static function ($value) : bool {
            return $value !== null;
        });
    }
}
