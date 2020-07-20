<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
 * @Description("A subclass of Role used to describe roles within organizations.")
 */
class OrganizationRole extends Role implements \JsonSerializable
{
    /**
     * @var float|null
     */
    protected $numberedPosition;
    /**
     * @param float|null $numberedPosition
     */
    public function setNumberedPosition(?float $numberedPosition) : void
    {
        $this->numberedPosition = $numberedPosition;
    }
    /**
     * @return float|null
     */
    public function getNumberedPosition() : ?float
    {
        return $this->numberedPosition;
    }
    public function jsonSerialize()
    {
        return (object) array_filter(array('numberedPosition' => $this->numberedPosition), static function ($value) : bool {
            return $value !== null;
        });
    }
}
