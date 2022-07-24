<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('Residence type: Single-family home.')]
class SingleFamilyResidence extends House implements \JsonSerializable
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

