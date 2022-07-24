<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A property-value pair, e.g. representing a feature of a product or place. Use the \'name\' property for the name of the property. If there is an additional human-readable version of the value, put that into the \'description\' property.<br/><br/>

Always use specific schema.org properties when a) they exist and b) you can populate them. Using PropertyValue as a substitute will typically not trigger the same effect as using the original, specific property.')]
class PropertyValue extends StructuredValue implements \JsonSerializable
{
    protected ?float $maxValue = null;
    protected Enumeration|StructuredValue|null $valueReference = null;
    protected string|\PSX\Uri\Uri|null $propertyID = null;
    protected ?float $minValue = null;
    protected float|string|bool|StructuredValue|null $value = null;
    protected string|\PSX\Uri\Uri|null $unitCode = null;
    protected ?string $unitText = null;
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
    public function setPropertyID(string|\PSX\Uri\Uri|null $propertyID) : void
    {
        $this->propertyID = $propertyID;
    }
    public function getPropertyID() : string|\PSX\Uri\Uri|null
    {
        return $this->propertyID;
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
    public function jsonSerialize() : object
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('maxValue' => $this->maxValue, 'valueReference' => $this->valueReference, 'propertyID' => $this->propertyID, 'minValue' => $this->minValue, 'value' => $this->value, 'unitCode' => $this->unitCode, 'unitText' => $this->unitText), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

