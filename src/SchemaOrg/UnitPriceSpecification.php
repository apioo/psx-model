<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('The price asked for a given offer by the respective organization or person.')]
class UnitPriceSpecification extends PriceSpecification implements \JsonSerializable
{
    protected ?QuantitativeValue $referenceQuantity = null;
    protected string|\PSX\Uri\Uri|null $unitCode = null;
    protected ?string $unitText = null;
    protected ?string $priceType = null;
    protected ?float $billingIncrement = null;
    public function setReferenceQuantity(?QuantitativeValue $referenceQuantity) : void
    {
        $this->referenceQuantity = $referenceQuantity;
    }
    public function getReferenceQuantity() : ?QuantitativeValue
    {
        return $this->referenceQuantity;
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
    public function setPriceType(?string $priceType) : void
    {
        $this->priceType = $priceType;
    }
    public function getPriceType() : ?string
    {
        return $this->priceType;
    }
    public function setBillingIncrement(?float $billingIncrement) : void
    {
        $this->billingIncrement = $billingIncrement;
    }
    public function getBillingIncrement() : ?float
    {
        return $this->billingIncrement;
    }
    public function jsonSerialize() : object
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('referenceQuantity' => $this->referenceQuantity, 'unitCode' => $this->unitCode, 'unitText' => $this->unitText, 'priceType' => $this->priceType, 'billingIncrement' => $this->billingIncrement), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

