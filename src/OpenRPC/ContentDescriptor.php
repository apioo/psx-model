<?php

declare(strict_types = 1);

namespace PSX\Model\OpenRPC;

/**
 * @Required({"name", "schema"})
 */
class ContentDescriptor implements \JsonSerializable
{
    /**
     * @var string|null
     */
    protected $name;
    /**
     * @var string|null
     */
    protected $summary;
    /**
     * @var string|null
     */
    protected $description;
    /**
     * @var bool|null
     */
    protected $required;
    /**
     * @var mixed|null
     */
    protected $schema;
    /**
     * @var bool|null
     */
    protected $deprecated;
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
     * @param string|null $summary
     */
    public function setSummary(?string $summary) : void
    {
        $this->summary = $summary;
    }
    /**
     * @return string|null
     */
    public function getSummary() : ?string
    {
        return $this->summary;
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
    public function jsonSerialize()
    {
        return (object) array_filter(array('name' => $this->name, 'summary' => $this->summary, 'description' => $this->description, 'required' => $this->required, 'schema' => $this->schema, 'deprecated' => $this->deprecated), static function ($value) : bool {
            return $value !== null;
        });
    }
}
