<?php

declare(strict_types = 1);

namespace PSX\Model\OpenAPI;


class Example
{
    /**
     * @var string|null
     */
    protected $summary;
    /**
     * @var string|null
     */
    protected $description;
    /**
     * @var string|null
     */
    protected $externalValue;
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
}
