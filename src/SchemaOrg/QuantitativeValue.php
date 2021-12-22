<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A point value or interval for product characteristics and other purposes.')]
class QuantitativeValue extends StructuredValue implements \JsonSerializable
{
    protected ?float $maxValue = null;
    protected Enumeration|StructuredValue|null $valueReference = null;
    protected ?float $minValue = null;
    protected float|string|bool|StructuredValue|null $value = null;
    protected string|\PSX\Uri\Uri|null $unitCode = null;
    protected ?string $unitText = null;
    protected ?PropertyValue $additionalProperty = null;
    public function setMaxValue(?float $maxValue) : void
    {
        $this->maxValue = $maxValue;
    }
    public function getMaxValue() : ?float
    {
        return $this->maxValue;
    }
    public function setValueReference(Enumeration|StructuredValue|null $valueReference) : void
    {
        $this->valueReference = $valueReference;
    }
    public function getValueReference() : Enumeration|StructuredValue|null
    {
        return $this->valueReference;
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
    public function setAdditionalProperty(?PropertyValue $additionalProperty) : void
    {
        $this->additionalProperty = $additionalProperty;
    }
    public function getAdditionalProperty() : ?PropertyValue
    {
        return $this->additionalProperty;
    }
    public function jsonSerialize()
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('maxValue' => $this->maxValue, 'valueReference' => $this->valueReference, 'minValue' => $this->minValue, 'value' => $this->value, 'unitCode' => $this->unitCode, 'unitText' => $this->unitText, 'additionalProperty' => $this->additionalProperty), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

