<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
* @Description("A suite in a hotel or other public accommodation, denotes a class of luxury accommodations, the key feature of which is multiple rooms (Source: Wikipedia, the free encyclopedia, see <a href=""http://en.wikipedia.org/wiki/Suite_(hotel)"">http://en.wikipedia.org/wiki/Suite_(hotel)</a>).
<br /><br />
See also the <a href=""/docs/hotels.html"">dedicated document on the use of schema.org for marking up hotels and other forms of accommodations</a>.")
*/
class Suite extends Accommodation implements \JsonSerializable
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
        return (object) array_filter(array('occupancy' => $this->occupancy, 'numberOfRooms' => $this->numberOfRooms, 'bed' => $this->bed), static function ($value) : bool {
            return $value !== null;
        });
    }
}
