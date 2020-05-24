<?php

declare(strict_types = 1);

namespace PSX\Model\OpenAPI;

/**
 * @Description("An object representing a Server Variable for server URL template substitution.")
 * @Required({"default"})
 */
class ServerVariable
{
    /**
     * @var array<string>
     * @UniqueItems(true)
     */
    protected $enum;
    /**
     * @var string
     */
    protected $default;
    /**
     * @var string
     */
    protected $description;
    /**
     * @param array<string> $enum
     */
    public function setEnum(?array $enum)
    {
        $this->enum = $enum;
    }
    /**
     * @return array<string>
     */
    public function getEnum() : ?array
    {
        return $this->enum;
    }
    /**
     * @param string $default
     */
    public function setDefault(?string $default)
    {
        $this->default = $default;
    }
    /**
     * @return string
     */
    public function getDefault() : ?string
    {
        return $this->default;
    }
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
}
