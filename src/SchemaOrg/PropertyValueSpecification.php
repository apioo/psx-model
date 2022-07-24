<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A Property value specification.')]
class PropertyValueSpecification extends Intangible implements \JsonSerializable
{
    protected ?float $maxValue = null;
    protected ?float $minValue = null;
    protected ?float $valueMinLength = null;
    protected ?bool $readonlyValue = null;
    protected ?string $valueName = null;
    protected ?float $valueMaxLength = null;
    protected ?bool $multipleValues = null;
    protected ?string $valuePattern = null;
    protected Thing|string|null $defaultValue = null;
    protected ?float $stepValue = null;
    protected ?bool $valueRequired = null;
    public function setMaxValue(?float $maxValue) : void
    {
        $this->maxValue = $maxValue;
    }
    public function getMaxValue() : ?float
    {
        return $this->maxValue;
    }
    public function setMinValue(?float $minValue) : void
    {
        $this->minValue = $minValue;
    }
    public function getMinValue() : ?float
    {
        return $this->minValue;
    }
    public function setValueMinLength(?float $valueMinLength) : void
    {
        $this->valueMinLength = $valueMinLength;
    }
    public function getValueMinLength() : ?float
    {
        return $this->valueMinLength;
    }
    public function setReadonlyValue(?bool $readonlyValue) : void
    {
        $this->readonlyValue = $readonlyValue;
    }
    public function getReadonlyValue() : ?bool
    {
        return $this->readonlyValue;
    }
    public function setValueName(?string $valueName) : void
    {
        $this->valueName = $valueName;
    }
    public function getValueName() : ?string
    {
        return $this->valueName;
    }
    public function setValueMaxLength(?float $valueMaxLength) : void
    {
        $this->valueMaxLength = $valueMaxLength;
    }
    public function getValueMaxLength() : ?float
    {
        return $this->valueMaxLength;
    }
    public function setMultipleValues(?bool $multipleValues) : void
    {
        $this->multipleValues = $multipleValues;
    }
    public function getMultipleValues() : ?bool
    {
        return $this->multipleValues;
    }
    public function setValuePattern(?string $valuePattern) : void
    {
        $this->valuePattern = $valuePattern;
    }
    public function getValuePattern() : ?string
    {
        return $this->valuePattern;
    }
    public function setDefaultValue(Thing|string|null $defaultValue) : void
    {
        $this->defaultValue = $defaultValue;
    }
    public function getDefaultValue() : Thing|string|null
    {
        return $this->defaultValue;
    }
    public function setStepValue(?float $stepValue) : void
    {
        $this->stepValue = $stepValue;
    }
    public function getStepValue() : ?float
    {
        return $this->stepValue;
    }
    public function setValueRequired(?bool $valueRequired) : void
    {
        $this->valueRequired = $valueRequired;
    }
    public function getValueRequired() : ?bool
    {
        return $this->valueRequired;
    }
    public function jsonSerialize() : object
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('maxValue' => $this->maxValue, 'minValue' => $this->minValue, 'valueMinLength' => $this->valueMinLength, 'readonlyValue' => $this->readonlyValue, 'valueName' => $this->valueName, 'valueMaxLength' => $this->valueMaxLength, 'multipleValues' => $this->multipleValues, 'valuePattern' => $this->valuePattern, 'defaultValue' => $this->defaultValue, 'stepValue' => $this->stepValue, 'valueRequired' => $this->valueRequired), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

