<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
 * @Description("An entity holding detailed information about the available bed types, e.g. the quantity of twin beds for a hotel room. For the single case of just one bed of a certain type, you can use bed directly with a text. See also <a class=""localLink"" href=""http://schema.org/BedType"">BedType</a> (under development).")
 */
class BedDetails extends Intangible implements \JsonSerializable
{
    /**
     * @var string|BedType|null
     */
    protected $typeOfBed;
    /**
     * @var float|null
     */
    protected $numberOfBeds;
    /**
     * @param string|BedType|null $typeOfBed
     */
    public function setTypeOfBed($typeOfBed) : void
    {
        $this->typeOfBed = $typeOfBed;
    }
    /**
     * @return string|BedType|null
     */
    public function getTypeOfBed()
    {
        return $this->typeOfBed;
    }
    /**
     * @param float|null $numberOfBeds
     */
    public function setNumberOfBeds(?float $numberOfBeds) : void
    {
        $this->numberOfBeds = $numberOfBeds;
    }
    /**
     * @return float|null
     */
    public function getNumberOfBeds() : ?float
    {
        return $this->numberOfBeds;
    }
    public function jsonSerialize()
    {
        return (object) array_filter(array('typeOfBed' => $this->typeOfBed, 'numberOfBeds' => $this->numberOfBeds), static function ($value) : bool {
            return $value !== null;
        });
    }
}
