<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
 * @Description("An apartment (in American English) or flat (in British English) is a self-contained housing unit (a type of residential real estate) that occupies only part of a building (Source: Wikipedia, the free encyclopedia, see <a href=""http://en.wikipedia.org/wiki/Apartment"">http://en.wikipedia.org/wiki/Apartment</a>).")
 */
class Apartment extends Accommodation implements \JsonSerializable
{
    /**
     * @var QuantitativeValue|null
     */
    protected $occupancy;
    /**
     * @var float|QuantitativeValue|null
     */
    protected $numberOfRooms;
    /**
     * @param QuantitativeValue|null $occupancy
     */
    public function setOccupancy(?QuantitativeValue $occupancy) : void
    {
        $this->occupancy = $occupancy;
    }
    /**
     * @return QuantitativeValue|null
     */
    public function getOccupancy() : ?QuantitativeValue
    {
        return $this->occupancy;
    }
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
    public function jsonSerialize()
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('occupancy' => $this->occupancy, 'numberOfRooms' => $this->numberOfRooms), static function ($value) : bool {
            return $value !== null;
        }));
    }
}
