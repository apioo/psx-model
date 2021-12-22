<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A structured value indicating the quantity, unit of measurement, and business function of goods included in a bundle offer.')]
class TypeAndQuantityNode extends StructuredValue implements \JsonSerializable
{
    protected Service|Product|null $typeOfGood = null;
    protected string|\PSX\Uri\Uri|null $unitCode = null;
    protected ?string $unitText = null;
    protected ?BusinessFunction $businessFunction = null;
    protected ?float $amountOfThisGood = null;
    public function setTypeOfGood(Service|Product|null $typeOfGood) : void
    {
        $this->typeOfGood = $typeOfGood;
    }
    public function getTypeOfGood() : Service|Product|null
    {
        return $this->typeOfGood;
    }
    public function setUnitCode(string|\PSX\Uri\Uri|null $unitCode) : void
    {
        $this->unitCode = $unitCode;
    }
    public function getUnitCode() : string|\PSX\Uri\Uri|null
    {
        return $this->unitCode;
    }
    public function setUnitText(?string $unitText) : void
    {
        $this->unitText = $unitText;
    }
    public function getUnitText() : ?string
    {
        return $this->unitText;
    }
    public function setBusinessFunction(?BusinessFunction $businessFunction) : void
    {
        $this->businessFunction = $businessFunction;
    }
    public function getBusinessFunction() : ?BusinessFunction
    {
        return $this->businessFunction;
    }
    public function setAmountOfThisGood(?float $amountOfThisGood) : void
    {
        $this->amountOfThisGood = $amountOfThisGood;
    }
    public function getAmountOfThisGood() : ?float
    {
        return $this->amountOfThisGood;
    }
    public function jsonSerialize()
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('typeOfGood' => $this->typeOfGood, 'unitCode' => $this->unitCode, 'unitText' => $this->unitText, 'businessFunction' => $this->businessFunction, 'amountOfThisGood' => $this->amountOfThisGood), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

