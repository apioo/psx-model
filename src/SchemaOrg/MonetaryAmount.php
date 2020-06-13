<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
 * @Description("A monetary value or range. This type can be used to describe an amount of money such as $50 USD, or a range as in describing a bank account being suitable for a balance between £1,000 and £1,000,000 GBP, or the value of a salary, etc. It is recommended to use <a class=""localLink"" href=""http://schema.org/PriceSpecification"">PriceSpecification</a> Types to describe the price of an Offer, Invoice, etc.")
 */
class MonetaryAmount extends StructuredValue
{
    /**
     * @var float|null
     */
    protected $maxValue;
    /**
     * @var string|null
     */
    protected $currency;
    /**
     * @var float|null
     */
    protected $minValue;
    /**
     * @var float|string|bool|StructuredValue|null
     */
    protected $value;
    /**
     * @var \PSX\DateTime\Date|\DateTime|null
     */
    protected $validThrough;
    /**
     * @var \PSX\DateTime\Date|\DateTime|null
     */
    protected $validFrom;
    /**
     * @param float|null $maxValue
     */
    public function setMaxValue(?float $maxValue) : void
    {
        $this->maxValue = $maxValue;
    }
    /**
     * @return float|null
     */
    public function getMaxValue() : ?float
    {
        return $this->maxValue;
    }
    /**
     * @param string|null $currency
     */
    public function setCurrency(?string $currency) : void
    {
        $this->currency = $currency;
    }
    /**
     * @return string|null
     */
    public function getCurrency() : ?string
    {
        return $this->currency;
    }
    /**
     * @param float|null $minValue
     */
    public function setMinValue(?float $minValue) : void
    {
        $this->minValue = $minValue;
    }
    /**
     * @return float|null
     */
    public function getMinValue() : ?float
    {
        return $this->minValue;
    }
    /**
     * @param float|string|bool|StructuredValue|null $value
     */
    public function setValue($value) : void
    {
        $this->value = $value;
    }
    /**
     * @return float|string|bool|StructuredValue|null
     */
    public function getValue()
    {
        return $this->value;
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
}
