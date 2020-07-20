<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
* @Description("A property-value pair, e.g. representing a feature of a product or place. Use the 'name' property for the name of the property. If there is an additional human-readable version of the value, put that into the 'description' property.<br/><br/>

Always use specific schema.org properties when a) they exist and b) you can populate them. Using PropertyValue as a substitute will typically not trigger the same effect as using the original, specific property.")
*/
class PropertyValue extends StructuredValue implements \JsonSerializable
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
     * @var string|\PSX\Uri\Uri|null
     */
    protected $propertyID;
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
     * @param string|\PSX\Uri\Uri|null $propertyID
     */
    public function setPropertyID($propertyID) : void
    {
        $this->propertyID = $propertyID;
    }
    /**
     * @return string|\PSX\Uri\Uri|null
     */
    public function getPropertyID()
    {
        return $this->propertyID;
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
    public function jsonSerialize()
    {
        return (object) array_filter(array('maxValue' => $this->maxValue, 'valueReference' => $this->valueReference, 'propertyID' => $this->propertyID, 'minValue' => $this->minValue, 'value' => $this->value, 'unitCode' => $this->unitCode, 'unitText' => $this->unitText), static function ($value) : bool {
            return $value !== null;
        });
    }
}
