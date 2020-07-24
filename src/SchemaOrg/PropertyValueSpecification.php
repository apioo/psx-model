<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
 * @Description("A Property value specification.")
 */
class PropertyValueSpecification extends Intangible implements \JsonSerializable
{
    /**
     * @var float|null
     */
    protected $maxValue;
    /**
     * @var float|null
     */
    protected $minValue;
    /**
     * @var float|null
     */
    protected $valueMinLength;
    /**
     * @var bool|null
     */
    protected $readonlyValue;
    /**
     * @var string|null
     */
    protected $valueName;
    /**
     * @var float|null
     */
    protected $valueMaxLength;
    /**
     * @var bool|null
     */
    protected $multipleValues;
    /**
     * @var string|null
     */
    protected $valuePattern;
    /**
     * @var Thing|string|null
     */
    protected $defaultValue;
    /**
     * @var float|null
     */
    protected $stepValue;
    /**
     * @var bool|null
     */
    protected $valueRequired;
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
     * @param float|null $valueMinLength
     */
    public function setValueMinLength(?float $valueMinLength) : void
    {
        $this->valueMinLength = $valueMinLength;
    }
    /**
     * @return float|null
     */
    public function getValueMinLength() : ?float
    {
        return $this->valueMinLength;
    }
    /**
     * @param bool|null $readonlyValue
     */
    public function setReadonlyValue(?bool $readonlyValue) : void
    {
        $this->readonlyValue = $readonlyValue;
    }
    /**
     * @return bool|null
     */
    public function getReadonlyValue() : ?bool
    {
        return $this->readonlyValue;
    }
    /**
     * @param string|null $valueName
     */
    public function setValueName(?string $valueName) : void
    {
        $this->valueName = $valueName;
    }
    /**
     * @return string|null
     */
    public function getValueName() : ?string
    {
        return $this->valueName;
    }
    /**
     * @param float|null $valueMaxLength
     */
    public function setValueMaxLength(?float $valueMaxLength) : void
    {
        $this->valueMaxLength = $valueMaxLength;
    }
    /**
     * @return float|null
     */
    public function getValueMaxLength() : ?float
    {
        return $this->valueMaxLength;
    }
    /**
     * @param bool|null $multipleValues
     */
    public function setMultipleValues(?bool $multipleValues) : void
    {
        $this->multipleValues = $multipleValues;
    }
    /**
     * @return bool|null
     */
    public function getMultipleValues() : ?bool
    {
        return $this->multipleValues;
    }
    /**
     * @param string|null $valuePattern
     */
    public function setValuePattern(?string $valuePattern) : void
    {
        $this->valuePattern = $valuePattern;
    }
    /**
     * @return string|null
     */
    public function getValuePattern() : ?string
    {
        return $this->valuePattern;
    }
    /**
     * @param Thing|string|null $defaultValue
     */
    public function setDefaultValue($defaultValue) : void
    {
        $this->defaultValue = $defaultValue;
    }
    /**
     * @return Thing|string|null
     */
    public function getDefaultValue()
    {
        return $this->defaultValue;
    }
    /**
     * @param float|null $stepValue
     */
    public function setStepValue(?float $stepValue) : void
    {
        $this->stepValue = $stepValue;
    }
    /**
     * @return float|null
     */
    public function getStepValue() : ?float
    {
        return $this->stepValue;
    }
    /**
     * @param bool|null $valueRequired
     */
    public function setValueRequired(?bool $valueRequired) : void
    {
        $this->valueRequired = $valueRequired;
    }
    /**
     * @return bool|null
     */
    public function getValueRequired() : ?bool
    {
        return $this->valueRequired;
    }
    public function jsonSerialize()
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('maxValue' => $this->maxValue, 'minValue' => $this->minValue, 'valueMinLength' => $this->valueMinLength, 'readonlyValue' => $this->readonlyValue, 'valueName' => $this->valueName, 'valueMaxLength' => $this->valueMaxLength, 'multipleValues' => $this->multipleValues, 'valuePattern' => $this->valuePattern, 'defaultValue' => $this->defaultValue, 'stepValue' => $this->stepValue, 'valueRequired' => $this->valueRequired), static function ($value) : bool {
            return $value !== null;
        }));
    }
}
