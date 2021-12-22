<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A hotel room is a single room in a hotel.
<br /><br />
See also the <a href="/docs/hotels.html">dedicated document on the use of schema.org for marking up hotels and other forms of accommodations</a>.')]
class HotelRoom extends Room implements \JsonSerializable
{
    protected ?QuantitativeValue $occupancy = null;
    protected string|BedDetails|BedType|null $bed = null;
    public function setOccupancy(?QuantitativeValue $occupancy) : void
    {
        $this->occupancy = $occupancy;
    }
    public function getOccupancy() : ?QuantitativeValue
    {
        return $this->occupancy;
    }
    public function setBed(string|BedDetails|BedType|null $bed) : void
    {
        $this->bed = $bed;
    }
    public function getBed() : string|BedDetails|BedType|null
    {
        return $this->bed;
    }
    public function jsonSerialize()
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('occupancy' => $this->occupancy, 'bed' => $this->bed), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

