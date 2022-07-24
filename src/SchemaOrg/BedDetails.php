<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('An entity holding detailed information about the available bed types, e.g. the quantity of twin beds for a hotel room. For the single case of just one bed of a certain type, you can use bed directly with a text. See also <a class="localLink" href="http://schema.org/BedType">BedType</a> (under development).')]
class BedDetails extends Intangible implements \JsonSerializable
{
    protected string|BedType|null $typeOfBed = null;
    protected ?float $numberOfBeds = null;
    public function setTypeOfBed(string|BedType|null $typeOfBed) : void
    {
        $this->typeOfBed = $typeOfBed;
    }
    public function getTypeOfBed() : string|BedType|null
    {
        return $this->typeOfBed;
    }
    public function setNumberOfBeds(?float $numberOfBeds) : void
    {
        $this->numberOfBeds = $numberOfBeds;
    }
    public function getNumberOfBeds() : ?float
    {
        return $this->numberOfBeds;
    }
    public function jsonSerialize() : object
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('typeOfBed' => $this->typeOfBed, 'numberOfBeds' => $this->numberOfBeds), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

