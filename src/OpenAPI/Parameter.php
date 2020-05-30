<?php

declare(strict_types = 1);

namespace PSX\Model\OpenAPI;

/**
 * @Description("Describes a single operation parameter.  A unique parameter is defined by a combination of a name and location.")
 * @Required({"name", "in"})
 */
class Parameter
{
    /**
     * @var string|null
     */
    protected $name;
    /**
     * @var string|null
     */
    protected $in;
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
     * @param string|null $name
     */
    public function setName(?string $name) : void
    {
        $this->name = $name;
    }
    /**
     * @return string|null
     */
    public function getName() : ?string
    {
        return $this->name;
    }
    /**
     * @param string|null $in
     */
    public function setIn(?string $in) : void
    {
        $this->in = $in;
    }
    /**
     * @return string|null
     */
    public function getIn() : ?string
    {
        return $this->in;
    }
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
}
