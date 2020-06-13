<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
 * @Description("A structured value representing a price or price range. Typically, only the subclasses of this type are used for markup. It is recommended to use <a class=""localLink"" href=""http://schema.org/MonetaryAmount"">MonetaryAmount</a> to describe independent amounts of money such as a salary, credit card limits, etc.")
 */
class PriceSpecification extends StructuredValue
{
    /**
     * @var PriceSpecification|null
     */
    protected $eligibleTransactionVolume;
    /**
     * @var float|string|null
     */
    protected $price;
    /**
     * @var string|null
     */
    protected $priceCurrency;
    /**
     * @var bool|null
     */
    protected $valueAddedTaxIncluded;
    /**
     * @var QuantitativeValue|null
     */
    protected $eligibleQuantity;
    /**
     * @var \PSX\DateTime\Date|\DateTime|null
     */
    protected $validThrough;
    /**
     * @var \PSX\DateTime\Date|\DateTime|null
     */
    protected $validFrom;
    /**
     * @var float|null
     */
    protected $minPrice;
    /**
     * @var float|null
     */
    protected $maxPrice;
    /**
     * @param PriceSpecification|null $eligibleTransactionVolume
     */
    public function setEligibleTransactionVolume(?PriceSpecification $eligibleTransactionVolume) : void
    {
        $this->eligibleTransactionVolume = $eligibleTransactionVolume;
    }
    /**
     * @return PriceSpecification|null
     */
    public function getEligibleTransactionVolume() : ?PriceSpecification
    {
        return $this->eligibleTransactionVolume;
    }
    /**
     * @param float|string|null $price
     */
    public function setPrice($price) : void
    {
        $this->price = $price;
    }
    /**
     * @return float|string|null
     */
    public function getPrice()
    {
        return $this->price;
    }
    /**
     * @param string|null $priceCurrency
     */
    public function setPriceCurrency(?string $priceCurrency) : void
    {
        $this->priceCurrency = $priceCurrency;
    }
    /**
     * @return string|null
     */
    public function getPriceCurrency() : ?string
    {
        return $this->priceCurrency;
    }
    /**
     * @param bool|null $valueAddedTaxIncluded
     */
    public function setValueAddedTaxIncluded(?bool $valueAddedTaxIncluded) : void
    {
        $this->valueAddedTaxIncluded = $valueAddedTaxIncluded;
    }
    /**
     * @return bool|null
     */
    public function getValueAddedTaxIncluded() : ?bool
    {
        return $this->valueAddedTaxIncluded;
    }
    /**
     * @param QuantitativeValue|null $eligibleQuantity
     */
    public function setEligibleQuantity(?QuantitativeValue $eligibleQuantity) : void
    {
        $this->eligibleQuantity = $eligibleQuantity;
    }
    /**
     * @return QuantitativeValue|null
     */
    public function getEligibleQuantity() : ?QuantitativeValue
    {
        return $this->eligibleQuantity;
    }
    /**
     * @param \PSX\DateTime\Date|\DateTime|null $validThrough
     */
    public function setValidThrough($validThrough) : void
    {
        $this->validThrough = $validThrough;
    }
    /**
     * @return \PSX\DateTime\Date|\DateTime|null
     */
    public function getValidThrough()
    {
        return $this->validThrough;
    }
    /**
     * @param \PSX\DateTime\Date|\DateTime|null $validFrom
     */
    public function setValidFrom($validFrom) : void
    {
        $this->validFrom = $validFrom;
    }
    /**
     * @return \PSX\DateTime\Date|\DateTime|null
     */
    public function getValidFrom()
    {
        return $this->validFrom;
    }
    /**
     * @param float|null $minPrice
     */
    public function setMinPrice(?float $minPrice) : void
    {
        $this->minPrice = $minPrice;
    }
    /**
     * @return float|null
     */
    public function getMinPrice() : ?float
    {
        return $this->minPrice;
    }
    /**
     * @param float|null $maxPrice
     */
    public function setMaxPrice(?float $maxPrice) : void
    {
        $this->maxPrice = $maxPrice;
    }
    /**
     * @return float|null
     */
    public function getMaxPrice() : ?float
    {
        return $this->maxPrice;
    }
}
