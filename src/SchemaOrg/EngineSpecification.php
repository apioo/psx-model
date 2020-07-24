<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
 * @Description("Information about the engine of the vehicle. A vehicle can have multiple engines represented by multiple engine specification entities.")
 */
class EngineSpecification extends StructuredValue implements \JsonSerializable
{
    /**
     * @var string|\PSX\Uri\Uri|QualitativeValue|null
     */
    protected $fuelType;
    /**
     * @param string|\PSX\Uri\Uri|QualitativeValue|null $fuelType
     */
    public function setFuelType($fuelType) : void
    {
        $this->fuelType = $fuelType;
    }
    /**
     * @return string|\PSX\Uri\Uri|QualitativeValue|null
     */
    public function getFuelType()
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
