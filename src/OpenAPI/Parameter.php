<?php

declare(strict_types = 1);

namespace PSX\Model\OpenAPI;

use PSX\Schema\Attribute\Description;
use PSX\Schema\Attribute\Required;

#[Description('Describes a single operation parameter.  A unique parameter is defined by a combination of a name and location.')]
#[Required(array('name', 'in'))]
class Parameter implements \JsonSerializable
{
    protected ?string $name = null;
    protected ?string $in = null;
    protected ?string $description = null;
    protected ?bool $required = null;
    protected ?bool $deprecated = null;
    protected ?bool $allowEmptyValue = null;
    protected ?string $style = null;
    protected ?bool $explode = null;
    protected ?bool $allowReserved = null;
    protected mixed $schema = null;
    protected mixed $example = null;
    protected ?Examples $examples = null;
    protected ?MediaTypes $content = null;
    public function setName(?string $name) : void
    {
        $this->name = $name;
    }
    public function getName() : ?string
    {
        return $this->name;
    }
    public function setIn(?string $in) : void
    {
        $this->in = $in;
    }
    public function getIn() : ?string
    {
        return $this->in;
    }
    public function setDescription(?string $description) : void
    {
        $this->description = $description;
    }
    public function getDescription() : ?string
    {
        return $this->description;
    }
    public function setRequired(?bool $required) : void
    {
        $this->required = $required;
    }
    public function getRequired() : ?bool
    {
        return $this->required;
    }
    public function setDeprecated(?bool $deprecated) : void
    {
        $this->deprecated = $deprecated;
    }
    public function getDeprecated() : ?bool
    {
        return $this->deprecated;
    }
    public function setAllowEmptyValue(?bool $allowEmptyValue) : void
    {
        $this->allowEmptyValue = $allowEmptyValue;
    }
    public function getAllowEmptyValue() : ?bool
    {
        return $this->allowEmptyValue;
    }
    public function setStyle(?string $style) : void
    {
        $this->style = $style;
    }
    public function getStyle() : ?string
    {
        return $this->style;
    }
    public function setExplode(?bool $explode) : void
    {
        $this->explode = $explode;
    }
    public function getExplode() : ?bool
    {
        return $this->explode;
    }
    public function setAllowReserved(?bool $allowReserved) : void
    {
        $this->allowReserved = $allowReserved;
    }
    public function getAllowReserved() : ?bool
    {
        return $this->allowReserved;
    }
    public function setSchema(mixed $schema) : void
    {
        $this->schema = $schema;
    }
    public function getSchema() : mixed
    {
        return $this->schema;
    }
    public function setExample(mixed $example) : void
    {
        $this->example = $example;
    }
    public function getExample() : mixed
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
    public function setContent(?MediaTypes $content) : void
    {
        $this->content = $content;
    }
    public function getContent() : ?MediaTypes
    {
        return $this->content;
    }
    public function jsonSerialize() : object
    {
        return (object) array_filter(array('name' => $this->name, 'in' => $this->in, 'description' => $this->description, 'required' => $this->required, 'deprecated' => $this->deprecated, 'allowEmptyValue' => $this->allowEmptyValue, 'style' => $this->style, 'explode' => $this->explode, 'allowReserved' => $this->allowReserved, 'schema' => $this->schema, 'example' => $this->example, 'examples' => $this->examples, 'content' => $this->content), static function ($value) : bool {
            return $value !== null;
        });
    }
}

