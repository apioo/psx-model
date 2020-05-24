<?php

declare(strict_types = 1);

namespace PSX\Model\OpenAPI;

/**
 * @Description("The Header Object follows the structure of the Parameter Object with the following changes:  1. `name` MUST NOT be specified, it is given in the corresponding `headers` map. 1. `in` MUST NOT be specified, it is implicitly in `header`. 1. All traits that are affected by the location MUST be applicable to a location of `header` (for example, `style`).")
 */
class Header
{
    /**
     * @var string
     */
    protected $description;
    /**
     * @var bool
     */
    protected $required;
    /**
     * @var bool
     */
    protected $deprecated;
    /**
     * @var bool
     */
    protected $allowEmptyValue;
    /**
     * @var string
     */
    protected $style;
    /**
     * @var bool
     */
    protected $explode;
    /**
     * @var bool
     */
    protected $allowReserved;
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
     * @var MediaTypes
     */
    protected $content;
    /**
     * @param string $description
     */
    public function setDescription(?string $description)
    {
        $this->description = $description;
    }
    /**
     * @return string
     */
    public function getDescription() : ?string
    {
        return $this->description;
    }
    /**
     * @param bool $required
     */
    public function setRequired(?bool $required)
    {
        $this->required = $required;
    }
    /**
     * @return bool
     */
    public function getRequired() : ?bool
    {
        return $this->required;
    }
    /**
     * @param bool $deprecated
     */
    public function setDeprecated(?bool $deprecated)
    {
        $this->deprecated = $deprecated;
    }
    /**
     * @return bool
     */
    public function getDeprecated() : ?bool
    {
        return $this->deprecated;
    }
    /**
     * @param bool $allowEmptyValue
     */
    public function setAllowEmptyValue(?bool $allowEmptyValue)
    {
        $this->allowEmptyValue = $allowEmptyValue;
    }
    /**
     * @return bool
     */
    public function getAllowEmptyValue() : ?bool
    {
        return $this->allowEmptyValue;
    }
    /**
     * @param string $style
     */
    public function setStyle(?string $style)
    {
        $this->style = $style;
    }
    /**
     * @return string
     */
    public function getStyle() : ?string
    {
        return $this->style;
    }
    /**
     * @param bool $explode
     */
    public function setExplode(?bool $explode)
    {
        $this->explode = $explode;
    }
    /**
     * @return bool
     */
    public function getExplode() : ?bool
    {
        return $this->explode;
    }
    /**
     * @param bool $allowReserved
     */
    public function setAllowReserved(?bool $allowReserved)
    {
        $this->allowReserved = $allowReserved;
    }
    /**
     * @return bool
     */
    public function getAllowReserved() : ?bool
    {
        return $this->allowReserved;
    }
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
     * @param MediaTypes $content
     */
    public function setContent(?MediaTypes $content)
    {
        $this->content = $content;
    }
    /**
     * @return MediaTypes
     */
    public function getContent() : ?MediaTypes
    {
        return $this->content;
    }
}
