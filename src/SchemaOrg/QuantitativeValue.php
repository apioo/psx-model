<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
 * @Description("A point value or interval for product characteristics and other purposes.")
 */
class QuantitativeValue extends StructuredValue
{
    /**
     * @var float|null
     */
    protected $maxValue;
    /**
     * @var Enumeration|StructuredValue|null
     */
    protected $valueReference;
    /**
     * @var float|null
     */
    protected $minValue;
    /**
     * @var float|string|bool|StructuredValue|null
     */
    protected $value;
    /**
     * @var string|\PSX\Uri\Uri|null
     */
    protected $unitCode;
    /**
     * @var string|null
     */
    protected $unitText;
    /**
     * @var PropertyValue|null
     */
    protected $additionalProperty;
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
     * @param Enumeration|StructuredValue|null $valueReference
     */
    public function setValueReference($valueReference) : void
    {
        $this->valueReference = $valueReference;
    }
    /**
     * @return Enumeration|StructuredValue|null
     */
    public function getValueReference()
    {
        return $this->valueReference;
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
     * @param PropertyValue|null $additionalProperty
     */
    public function setAdditionalProperty(?PropertyValue $additionalProperty) : void
    {
        $this->additionalProperty = $additionalProperty;
    }
    /**
     * @return PropertyValue|null
     */
    public function getAdditionalProperty() : ?PropertyValue
    {
        return $this->additionalProperty;
    }
}
