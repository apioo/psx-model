<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A structured value representing a price or price range. Typically, only the subclasses of this type are used for markup. It is recommended to use <a class="localLink" href="http://schema.org/MonetaryAmount">MonetaryAmount</a> to describe independent amounts of money such as a salary, credit card limits, etc.')]
class PriceSpecification extends StructuredValue implements \JsonSerializable
{
    protected ?PriceSpecification $eligibleTransactionVolume = null;
    protected float|string|null $price = null;
    protected ?string $priceCurrency = null;
    protected ?bool $valueAddedTaxIncluded = null;
    protected ?QuantitativeValue $eligibleQuantity = null;
    protected \PSX\DateTime\LocalDate|\PSX\DateTime\LocalDateTime|null $validThrough = null;
    protected \PSX\DateTime\LocalDate|\PSX\DateTime\LocalDateTime|null $validFrom = null;
    protected ?float $minPrice = null;
    protected ?float $maxPrice = null;
    public function setEligibleTransactionVolume(?PriceSpecification $eligibleTransactionVolume) : void
    {
        $this->eligibleTransactionVolume = $eligibleTransactionVolume;
    }
    public function getEligibleTransactionVolume() : ?PriceSpecification
    {
        return $this->eligibleTransactionVolume;
    }
    public function setPrice(float|string|null $price) : void
    {
        $this->price = $price;
    }
    public function getPrice() : float|string|null
    {
        return $this->price;
    }
    public function setPriceCurrency(?string $priceCurrency) : void
    {
        $this->priceCurrency = $priceCurrency;
    }
    public function getPriceCurrency() : ?string
    {
        return $this->priceCurrency;
    }
    public function setValueAddedTaxIncluded(?bool $valueAddedTaxIncluded) : void
    {
        $this->valueAddedTaxIncluded = $valueAddedTaxIncluded;
    }
    public function getValueAddedTaxIncluded() : ?bool
    {
        return $this->valueAddedTaxIncluded;
    }
    public function setEligibleQuantity(?QuantitativeValue $eligibleQuantity) : void
    {
        $this->eligibleQuantity = $eligibleQuantity;
    }
    public function getEligibleQuantity() : ?QuantitativeValue
    {
        return $this->eligibleQuantity;
    }
    public function setValidThrough(\PSX\DateTime\LocalDate|\PSX\DateTime\LocalDateTime|null $validThrough) : void
    {
        $this->validThrough = $validThrough;
    }
    public function getValidThrough() : \PSX\DateTime\LocalDate|\PSX\DateTime\LocalDateTime|null
    {
        return $this->validThrough;
    }
    public function setValidFrom(\PSX\DateTime\LocalDate|\PSX\DateTime\LocalDateTime|null $validFrom) : void
    {
        $this->validFrom = $validFrom;
    }
    public function getValidFrom() : \PSX\DateTime\LocalDate|\PSX\DateTime\LocalDateTime|null
    {
        return $this->validFrom;
    }
    public function setMinPrice(?float $minPrice) : void
    {
        $this->minPrice = $minPrice;
    }
    public function getMinPrice() : ?float
    {
        return $this->minPrice;
    }
    public function setMaxPrice(?float $maxPrice) : void
    {
        $this->maxPrice = $maxPrice;
    }
    public function getMaxPrice() : ?float
    {
        return $this->maxPrice;
    }
    public function jsonSerialize() : object
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('eligibleTransactionVolume' => $this->eligibleTransactionVolume, 'price' => $this->price, 'priceCurrency' => $this->priceCurrency, 'valueAddedTaxIncluded' => $this->valueAddedTaxIncluded, 'eligibleQuantity' => $this->eligibleQuantity, 'validThrough' => $this->validThrough, 'validFrom' => $this->validFrom, 'minPrice' => $this->minPrice, 'maxPrice' => $this->maxPrice), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

