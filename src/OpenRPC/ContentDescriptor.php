<?php

declare(strict_types = 1);

namespace PSX\Model\OpenRPC;

use PSX\Schema\Attribute\Required;

#[Required(array('name', 'schema'))]
class ContentDescriptor implements \JsonSerializable
{
    protected ?string $name = null;
    protected ?string $summary = null;
    protected ?string $description = null;
    protected ?bool $required = null;
    protected mixed $schema = null;
    protected ?bool $deprecated = null;
    public function setName(?string $name) : void
    {
        $this->name = $name;
    }
    public function getName() : ?string
    {
        return $this->name;
    }
    public function setSummary(?string $summary) : void
    {
        $this->summary = $summary;
    }
    public function getSummary() : ?string
    {
        return $this->summary;
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
    public function setSchema(mixed $schema) : void
    {
        $this->schema = $schema;
    }
    public function getSchema() : mixed
    {
        return $this->schema;
    }
    public function setDeprecated(?bool $deprecated) : void
    {
        $this->deprecated = $deprecated;
    }
    public function getDeprecated() : ?bool
    {
        return $this->deprecated;
    }
    public function jsonSerialize() : object
    {
        return (object) array_filter(array('name' => $this->name, 'summary' => $this->summary, 'description' => $this->description, 'required' => $this->required, 'schema' => $this->schema, 'deprecated' => $this->deprecated), static function ($value) : bool {
            return $value !== null;
        });
    }
}

