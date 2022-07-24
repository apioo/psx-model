<?php

declare(strict_types = 1);

namespace PSX\Model\OpenAPI;

use PSX\Schema\Attribute\Description;
use PSX\Schema\Attribute\Required;

#[Description('Describes a single request body.')]
#[Required(array('content'))]
class RequestBody implements \JsonSerializable
{
    protected ?string $description = null;
    protected ?MediaTypes $content = null;
    protected ?bool $required = null;
    public function setDescription(?string $description) : void
    {
        $this->description = $description;
    }
    public function getDescription() : ?string
    {
        return $this->description;
    }
    public function setContent(?MediaTypes $content) : void
    {
        $this->content = $content;
    }
    public function getContent() : ?MediaTypes
    {
        return $this->content;
    }
    public function setRequired(?bool $required) : void
    {
        $this->required = $required;
    }
    public function getRequired() : ?bool
    {
        return $this->required;
    }
    public function jsonSerialize() : object
    {
        return (object) array_filter(array('description' => $this->description, 'content' => $this->content, 'required' => $this->required), static function ($value) : bool {
            return $value !== null;
        });
    }
}

