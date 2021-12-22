<?php

declare(strict_types = 1);

namespace PSX\Model\OpenAPI;

use PSX\Schema\Attribute\Description;
use PSX\Schema\Attribute\Required;

#[Description('An object representing a Server Variable for server URL template substitution.')]
#[Required(array('default'))]
class ServerVariable implements \JsonSerializable
{
    /**
     * @var array<string>|null
     */
    protected ?array $enum = null;
    protected ?string $default = null;
    protected ?string $description = null;
    /**
     * @param array<string>|null $enum
     */
    public function setEnum(?array $enum) : void
    {
        $this->enum = $enum;
    }
    public function getEnum() : ?array
    {
        return $this->enum;
    }
    public function setDefault(?string $default) : void
    {
        $this->default = $default;
    }
    public function getDefault() : ?string
    {
        return $this->default;
    }
    public function setDescription(?string $description) : void
    {
        $this->description = $description;
    }
    public function getDescription() : ?string
    {
        return $this->description;
    }
    public function jsonSerialize()
    {
        return (object) array_filter(array('enum' => $this->enum, 'default' => $this->default, 'description' => $this->description), static function ($value) : bool {
            return $value !== null;
        });
    }
}

