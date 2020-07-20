<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
 * @Description("A predefined value for a product characteristic, e.g. the power cord plug type 'US' or the garment sizes 'S', 'M', 'L', and 'XL'.")
 */
class QualitativeValue extends Enumeration implements \JsonSerializable
{
    /**
     * @var Enumeration|StructuredValue|null
     */
    protected $valueReference;
    /**
     * @var QualitativeValue|null
     */
    protected $greaterOrEqual;
    /**
     * @var QualitativeValue|null
     */
    protected $lesser;
    /**
     * @var QualitativeValue|null
     */
    protected $equal;
    /**
     * @var QualitativeValue|null
     */
    protected $greater;
    /**
     * @var QualitativeValue|null
     */
    protected $nonEqual;
    /**
     * @var PropertyValue|null
     */
    protected $additionalProperty;
    /**
     * @var QualitativeValue|null
     */
    protected $lesserOrEqual;
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
     * @param QualitativeValue|null $greaterOrEqual
     */
    public function setGreaterOrEqual(?QualitativeValue $greaterOrEqual) : void
    {
        $this->greaterOrEqual = $greaterOrEqual;
    }
    /**
     * @return QualitativeValue|null
     */
    public function getGreaterOrEqual() : ?QualitativeValue
    {
        return $this->greaterOrEqual;
    }
    /**
     * @param QualitativeValue|null $lesser
     */
    public function setLesser(?QualitativeValue $lesser) : void
    {
        $this->lesser = $lesser;
    }
    /**
     * @return QualitativeValue|null
     */
    public function getLesser() : ?QualitativeValue
    {
        return $this->lesser;
    }
    /**
     * @param QualitativeValue|null $equal
     */
    public function setEqual(?QualitativeValue $equal) : void
    {
        $this->equal = $equal;
    }
    /**
     * @return QualitativeValue|null
     */
    public function getEqual() : ?QualitativeValue
    {
        return $this->equal;
    }
    /**
     * @param QualitativeValue|null $greater
     */
    public function setGreater(?QualitativeValue $greater) : void
    {
        $this->greater = $greater;
    }
    /**
     * @return QualitativeValue|null
     */
    public function getGreater() : ?QualitativeValue
    {
        return $this->greater;
    }
    /**
     * @param QualitativeValue|null $nonEqual
     */
    public function setNonEqual(?QualitativeValue $nonEqual) : void
    {
        $this->nonEqual = $nonEqual;
    }
    /**
     * @return QualitativeValue|null
     */
    public function getNonEqual() : ?QualitativeValue
    {
        return $this->nonEqual;
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
    /**
     * @param QualitativeValue|null $lesserOrEqual
     */
    public function setLesserOrEqual(?QualitativeValue $lesserOrEqual) : void
    {
        $this->lesserOrEqual = $lesserOrEqual;
    }
    /**
     * @return QualitativeValue|null
     */
    public function getLesserOrEqual() : ?QualitativeValue
    {
        return $this->lesserOrEqual;
    }
    public function jsonSerialize()
    {
        return (object) array_filter(array('valueReference' => $this->valueReference, 'greaterOrEqual' => $this->greaterOrEqual, 'lesser' => $this->lesser, 'equal' => $this->equal, 'greater' => $this->greater, 'nonEqual' => $this->nonEqual, 'additionalProperty' => $this->additionalProperty, 'lesserOrEqual' => $this->lesserOrEqual), static function ($value) : bool {
            return $value !== null;
        });
    }
}
