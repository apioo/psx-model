<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
 * @Description("A house is a building or structure that has the ability to be occupied for habitation by humans or other creatures (Source: Wikipedia, the free encyclopedia, see <a href=""http://en.wikipedia.org/wiki/House"">http://en.wikipedia.org/wiki/House</a>).")
 */
class House extends Accommodation
{
    /**
     * @var float|QuantitativeValue|null
     */
    protected $numberOfRooms;
    /**
     * @param float|QuantitativeValue|null $numberOfRooms
     */
    public function setNumberOfRooms($numberOfRooms) : void
    {
        $this->numberOfRooms = $numberOfRooms;
    }
    /**
     * @return float|QuantitativeValue|null
     */
    public function getNumberOfRooms()
    {
        return $this->numberOfRooms;
    }
}
