<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
* @Description("A hotel room is a single room in a hotel.
<br /><br />
See also the <a href=""/docs/hotels.html"">dedicated document on the use of schema.org for marking up hotels and other forms of accommodations</a>.")
*/
class HotelRoom extends Room implements \JsonSerializable
{
    /**
     * @var QuantitativeValue|null
     */
    protected $occupancy;
    /**
     * @var string|BedDetails|BedType|null
     */
    protected $bed;
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
     * @param string|BedDetails|BedType|null $bed
     */
    public function setBed($bed) : void
    {
        $this->bed = $bed;
    }
    /**
     * @return string|BedDetails|BedType|null
     */
    public function getBed()
    {
        return $this->bed;
    }
    public function jsonSerialize()
    {
        return (object) array_filter(array('occupancy' => $this->occupancy, 'bed' => $this->bed), static function ($value) : bool {
            return $value !== null;
        });
    }
}
