<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
 * @Description("A public structure, such as a town hall or concert hall.")
 */
class CivicStructure extends Place
{
    /**
     * @var string|null
     */
    protected $openingHours;
    /**
     * @param string|null $openingHours
     */
    public function setOpeningHours(?string $openingHours) : void
    {
        $this->openingHours = $openingHours;
    }
    /**
     * @return string|null
     */
    public function getOpeningHours() : ?string
    {
        return $this->openingHours;
    }
}
