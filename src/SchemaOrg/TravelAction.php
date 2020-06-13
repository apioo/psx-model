<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
 * @Description("The act of traveling from an fromLocation to a destination by a specified mode of transport, optionally with participants.")
 */
class TravelAction extends MoveAction
{
    /**
     * @var Distance|null
     */
    protected $distance;
    /**
     * @param Distance|null $distance
     */
    public function setDistance(?Distance $distance) : void
    {
        $this->distance = $distance;
    }
    /**
     * @return Distance|null
     */
    public function getDistance() : ?Distance
    {
        return $this->distance;
    }
}
