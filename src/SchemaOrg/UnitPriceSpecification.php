<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
 * @Description("The price asked for a given offer by the respective organization or person.")
 */
class UnitPriceSpecification extends PriceSpecification implements \JsonSerializable
{
    /**
     * @var QuantitativeValue|null
     */
    protected $referenceQuantity;
    /**
     * @var string|\PSX\Uri\Uri|null
     */
    protected $unitCode;
    /**
     * @var string|null
     */
    protected $unitText;
    /**
     * @var string|null
     */
    protected $priceType;
    /**
     * @var float|null
     */
    protected $billingIncrement;
    /**
     * @param QuantitativeValue|null $referenceQuantity
     */
    public function setReferenceQuantity(?QuantitativeValue $referenceQuantity) : void
    {
        $this->referenceQuantity = $referenceQuantity;
    }
    /**
     * @return QuantitativeValue|null
     */
    public function getReferenceQuantity() : ?QuantitativeValue
    {
        return $this->referenceQuantity;
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
     * @param string|null $priceType
     */
    public function setPriceType(?string $priceType) : void
    {
        $this->priceType = $priceType;
    }
    /**
     * @return string|null
     */
    public function getPriceType() : ?string
    {
        return $this->priceType;
    }
    /**
     * @param float|null $billingIncrement
     */
    public function setBillingIncrement(?float $billingIncrement) : void
    {
        $this->billingIncrement = $billingIncrement;
    }
    /**
     * @return float|null
     */
    public function getBillingIncrement() : ?float
    {
        return $this->billingIncrement;
    }
    public function jsonSerialize()
    {
        return (object) array_filter(array('referenceQuantity' => $this->referenceQuantity, 'unitCode' => $this->unitCode, 'unitText' => $this->unitText, 'priceType' => $this->priceType, 'billingIncrement' => $this->billingIncrement), static function ($value) : bool {
            return $value !== null;
        });
    }
}
