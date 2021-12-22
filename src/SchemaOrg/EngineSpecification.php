<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('Information about the engine of the vehicle. A vehicle can have multiple engines represented by multiple engine specification entities.')]
class EngineSpecification extends StructuredValue implements \JsonSerializable
{
    protected string|\PSX\Uri\Uri|QualitativeValue|null $fuelType = null;
    public function setFuelType(string|\PSX\Uri\Uri|QualitativeValue|null $fuelType) : void
    {
        $this->fuelType = $fuelType;
    }
    public function getFuelType() : string|\PSX\Uri\Uri|QualitativeValue|null
    {
        return $this->fuelType;
    }
    public function jsonSerialize()
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('fuelType' => $this->fuelType), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

