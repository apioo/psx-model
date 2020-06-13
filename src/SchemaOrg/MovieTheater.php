<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
 * @Description("A movie theater.")
 */
class MovieTheater extends CivicStructure
{
    /**
     * @var float|null
     */
    protected $screenCount;
    /**
     * @param float|null $screenCount
     */
    public function setScreenCount(?float $screenCount) : void
    {
        $this->screenCount = $screenCount;
    }
    /**
     * @return float|null
     */
    public function getScreenCount() : ?float
    {
        return $this->screenCount;
    }
}
