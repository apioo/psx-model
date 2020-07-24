<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
 * @Description("A movie theater.")
 */
class MovieTheater extends CivicStructure implements \JsonSerializable
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
    public function jsonSerialize()
    {
        return array_merge(parent::jsonSerialize(), array_filter(array('screenCount' => $this->screenCount), static function ($value) : bool {
            return $value !== null;
        }));
    }
}
