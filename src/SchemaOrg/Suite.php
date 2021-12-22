<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A suite in a hotel or other public accommodation, denotes a class of luxury accommodations, the key feature of which is multiple rooms (Source: Wikipedia, the free encyclopedia, see <a href="http://en.wikipedia.org/wiki/Suite_(hotel)">http://en.wikipedia.org/wiki/Suite_(hotel)</a>).
<br /><br />
See also the <a href="/docs/hotels.html">dedicated document on the use of schema.org for marking up hotels and other forms of accommodations</a>.')]
class Suite extends Accommodation implements \JsonSerializable
{
    protected ?QuantitativeValue $occupancy = null;
    protected float|QuantitativeValue|null $numberOfRooms = null;
    protected string|BedDetails|BedType|null $bed = null;
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
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('occupancy' => $this->occupancy, 'numberOfRooms' => $this->numberOfRooms, 'bed' => $this->bed), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

