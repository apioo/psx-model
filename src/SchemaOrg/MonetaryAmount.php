<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A monetary value or range. This type can be used to describe an amount of money such as $50 USD, or a range as in describing a bank account being suitable for a balance between £1,000 and £1,000,000 GBP, or the value of a salary, etc. It is recommended to use <a class="localLink" href="http://schema.org/PriceSpecification">PriceSpecification</a> Types to describe the price of an Offer, Invoice, etc.')]
class MonetaryAmount extends StructuredValue implements \JsonSerializable
{
    protected ?float $maxValue = null;
    protected ?string $currency = null;
    protected ?float $minValue = null;
    protected float|string|bool|StructuredValue|null $value = null;
    protected \PSX\DateTime\Date|\DateTime|null $validThrough = null;
    protected \PSX\DateTime\Date|\DateTime|null $validFrom = null;
    public function setMaxValue(?float $maxValue) : void
    {
        $this->maxValue = $maxValue;
    }
    public function getMaxValue() : ?float
    {
        return $this->maxValue;
    }
    public function setCurrency(?string $currency) : void
    {
        $this->currency = $currency;
    }
    public function getCurrency() : ?string
    {
        return $this->currency;
    }
    public function setMinValue(?float $minValue) : void
    {
        $this->minValue = $minValue;
    }
    public function getMinValue() : ?float
    {
        return $this->minValue;
    }
    public function setValue(float|string|bool|StructuredValue|null $value) : void
    {
        $this->value = $value;
    }
    public function getValue() : float|string|bool|StructuredValue|null
    {
        return $this->value;
    }
    public function setValidThrough(\PSX\DateTime\Date|\DateTime|null $validThrough) : void
    {
        $this->validThrough = $validThrough;
    }
    public function getValidThrough() : \PSX\DateTime\Date|\DateTime|null
    {
        return $this->validThrough;
    }
    public function setValidFrom(\PSX\DateTime\Date|\DateTime|null $validFrom) : void
    {
        $this->validFrom = $validFrom;
    }
    public function getValidFrom() : \PSX\DateTime\Date|\DateTime|null
    {
        return $this->validFrom;
    }
    public function jsonSerialize()
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('maxValue' => $this->maxValue, 'currency' => $this->currency, 'minValue' => $this->minValue, 'value' => $this->value, 'validThrough' => $this->validThrough, 'validFrom' => $this->validFrom), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

