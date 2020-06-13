<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
 * @Description("Information about the engine of the vehicle. A vehicle can have multiple engines represented by multiple engine specification entities.")
 */
class EngineSpecification extends StructuredValue
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
}
