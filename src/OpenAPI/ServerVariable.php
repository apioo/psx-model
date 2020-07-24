<?php

declare(strict_types = 1);

namespace PSX\Model\OpenAPI;

/**
 * @Description("An object representing a Server Variable for server URL template substitution.")
 * @Required({"default"})
 */
class ServerVariable implements \JsonSerializable
{
    /**
     * @var array<string>|null
     * @UniqueItems(true)
     */
    protected $enum;
    /**
     * @var string|null
     */
    protected $default;
    /**
     * @var string|null
     */
    protected $description;
    /**
     * @param array<string>|null $enum
     */
    public function setEnum(?array $enum) : void
    {
        $this->enum = $enum;
    }
    /**
     * @return array<string>|null
     */
    public function getEnum() : ?array
    {
        return $this->enum;
    }
    /**
     * @param string|null $default
     */
    public function setDefault(?string $default) : void
    {
        $this->default = $default;
    }
    /**
     * @return string|null
     */
    public function getDefault() : ?string
    {
        return $this->default;
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
    public function jsonSerialize()
    {
        return array_filter(array('enum' => $this->enum, 'default' => $this->default, 'description' => $this->description), static function ($value) : bool {
            return $value !== null;
        });
    }
}
