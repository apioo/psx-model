<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
 * @Description("A structured value indicating the quantity, unit of measurement, and business function of goods included in a bundle offer.")
 */
class TypeAndQuantityNode extends StructuredValue
{
    /**
     * @var Service|Product|null
     */
    protected $typeOfGood;
    /**
     * @var string|\PSX\Uri\Uri|null
     */
    protected $unitCode;
    /**
     * @var string|null
     */
    protected $unitText;
    /**
     * @var BusinessFunction|null
     */
    protected $businessFunction;
    /**
     * @var float|null
     */
    protected $amountOfThisGood;
    /**
     * @param Service|Product|null $typeOfGood
     */
    public function setTypeOfGood($typeOfGood) : void
    {
        $this->typeOfGood = $typeOfGood;
    }
    /**
     * @return Service|Product|null
     */
    public function getTypeOfGood()
    {
        return $this->typeOfGood;
    }
    /**
     * @param string|\PSX\Uri\Uri|null $unitCode
     */
    public function setUnitCode($unitCode) : void
    {
        $this->unitCode = $unitCode;
    }
    /**
     * @return string|\PSX\Uri\Uri|null
     */
    public function getUnitCode()
    {
        return $this->unitCode;
    }
    /**
     * @param string|null $unitText
     */
    public function setUnitText(?string $unitText) : void
    {
        $this->unitText = $unitText;
    }
    /**
     * @return string|null
     */
    public function getUnitText() : ?string
    {
        return $this->unitText;
    }
    /**
     * @param BusinessFunction|null $businessFunction
     */
    public function setBusinessFunction(?BusinessFunction $businessFunction) : void
    {
        $this->businessFunction = $businessFunction;
    }
    /**
     * @return BusinessFunction|null
     */
    public function getBusinessFunction() : ?BusinessFunction
    {
        return $this->businessFunction;
    }
    /**
     * @param float|null $amountOfThisGood
     */
    public function setAmountOfThisGood(?float $amountOfThisGood) : void
    {
        $this->amountOfThisGood = $amountOfThisGood;
    }
    /**
     * @return float|null
     */
    public function getAmountOfThisGood() : ?float
    {
        return $this->amountOfThisGood;
    }
}
