<?php

declare(strict_types = 1);

namespace PSX\Model\OpenAPI;


class Example
{
    /**
     * @var string
     */
    protected $summary;
    /**
     * @var string
     */
    protected $description;
    /**
     * @var string
     */
    protected $externalValue;
    /**
     * @param string $summary
     */
    public function setSummary(?string $summary)
    {
        $this->summary = $summary;
    }
    /**
     * @return string
     */
    public function getSummary() : ?string
    {
        return $this->summary;
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
    /**
     * @param string $externalValue
     */
    public function setExternalValue(?string $externalValue)
    {
        $this->externalValue = $externalValue;
    }
    /**
     * @return string
     */
    public function getExternalValue() : ?string
    {
        return $this->externalValue;
    }
}
