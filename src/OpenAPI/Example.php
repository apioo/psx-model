<?php

declare(strict_types = 1);

namespace PSX\Model\OpenAPI;


class Example implements \JsonSerializable
{
    protected ?string $summary = null;
    protected ?string $description = null;
    protected ?string $externalValue = null;
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
    public function setExternalValue(?string $externalValue) : void
    {
        $this->externalValue = $externalValue;
    }
    public function getExternalValue() : ?string
    {
        return $this->externalValue;
    }
    public function jsonSerialize()
    {
        return (object) array_filter(array('summary' => $this->summary, 'description' => $this->description, 'externalValue' => $this->externalValue), static function ($value) : bool {
            return $value !== null;
        });
    }
}

