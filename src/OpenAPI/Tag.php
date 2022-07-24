<?php

declare(strict_types = 1);

namespace PSX\Model\OpenAPI;

use PSX\Schema\Attribute\Description;
use PSX\Schema\Attribute\Required;

#[Description('Adds metadata to a single tag that is used by the Operation Object. It is not mandatory to have a Tag Object per tag defined in the Operation Object instances.')]
#[Required(array('name'))]
class Tag implements \JsonSerializable
{
    protected ?string $name = null;
    protected ?string $description = null;
    protected ?ExternalDocs $externalDocs = null;
    public function setName(?string $name) : void
    {
        $this->name = $name;
    }
    public function getName() : ?string
    {
        return $this->name;
    }
    public function setDescription(?string $description) : void
    {
        $this->description = $description;
    }
    public function getDescription() : ?string
    {
        return $this->description;
    }
    public function setExternalDocs(?ExternalDocs $externalDocs) : void
    {
        $this->externalDocs = $externalDocs;
    }
    public function getExternalDocs() : ?ExternalDocs
    {
        return $this->externalDocs;
    }
    public function jsonSerialize() : object
    {
        return (object) array_filter(array('name' => $this->name, 'description' => $this->description, 'externalDocs' => $this->externalDocs), static function ($value) : bool {
            return $value !== null;
        });
    }
}

