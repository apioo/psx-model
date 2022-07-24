<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('An apartment (in American English) or flat (in British English) is a self-contained housing unit (a type of residential real estate) that occupies only part of a building (Source: Wikipedia, the free encyclopedia, see <a href="http://en.wikipedia.org/wiki/Apartment">http://en.wikipedia.org/wiki/Apartment</a>).')]
class Apartment extends Accommodation implements \JsonSerializable
{
    protected ?QuantitativeValue $occupancy = null;
    protected float|QuantitativeValue|null $numberOfRooms = null;
    public function setOccupancy(?QuantitativeValue $occupancy) : void
    {
        $this->occupancy = $occupancy;
    }
    public function getOccupancy() : ?QuantitativeValue
    {
        return $this->occupancy;
    }
    public function setNumberOfRooms(float|QuantitativeValue|null $numberOfRooms) : void
    {
        $this->numberOfRooms = $numberOfRooms;
    }
    public function getNumberOfRooms() : float|QuantitativeValue|null
    {
        return $this->numberOfRooms;
    }
    public function jsonSerialize() : object
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('occupancy' => $this->occupancy, 'numberOfRooms' => $this->numberOfRooms), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

