<?php

declare(strict_types = 1);

namespace PSX\Model\OpenRPC;

/**
 * @Description("The Example object is an object the defines an example that is intended to match a given Content Descriptor Schema.")
 */
class ExampleObject implements \JsonSerializable
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
     * @var mixed|null
     */
    protected $value;
    /**
     * @var string|null
     */
    protected $externalValue;
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
     * @param mixed|null $value
     */
    public function setValue($value) : void
    {
        $this->value = $value;
    }
    /**
     * @return mixed|null
     */
    public function getValue()
    {
        return $this->value;
    }
    /**
     * @param string|null $externalValue
     */
    public function setExternalValue(?string $externalValue) : void
    {
        $this->externalValue = $externalValue;
    }
    /**
     * @return string|null
     */
    public function getExternalValue() : ?string
    {
        return $this->externalValue;
    }
    public function jsonSerialize()
    {
        return (object) array_filter(array('name' => $this->name, 'summary' => $this->summary, 'description' => $this->description, 'value' => $this->value, 'externalValue' => $this->externalValue), static function ($value) : bool {
            return $value !== null;
        });
    }
}
