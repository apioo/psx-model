<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A predefined value for a product characteristic, e.g. the power cord plug type \'US\' or the garment sizes \'S\', \'M\', \'L\', and \'XL\'.')]
class QualitativeValue extends Enumeration implements \JsonSerializable
{
    protected Enumeration|StructuredValue|null $valueReference = null;
    protected ?QualitativeValue $greaterOrEqual = null;
    protected ?QualitativeValue $lesser = null;
    protected ?QualitativeValue $equal = null;
    protected ?QualitativeValue $greater = null;
    protected ?QualitativeValue $nonEqual = null;
    protected ?PropertyValue $additionalProperty = null;
    protected ?QualitativeValue $lesserOrEqual = null;
    public function setValueReference(Enumeration|StructuredValue|null $valueReference) : void
    {
        $this->valueReference = $valueReference;
    }
    public function getValueReference() : Enumeration|StructuredValue|null
    {
        return $this->valueReference;
    }
    public function setGreaterOrEqual(?QualitativeValue $greaterOrEqual) : void
    {
        $this->greaterOrEqual = $greaterOrEqual;
    }
    public function getGreaterOrEqual() : ?QualitativeValue
    {
        return $this->greaterOrEqual;
    }
    public function setLesser(?QualitativeValue $lesser) : void
    {
        $this->lesser = $lesser;
    }
    public function getLesser() : ?QualitativeValue
    {
        return $this->lesser;
    }
    public function setEqual(?QualitativeValue $equal) : void
    {
        $this->equal = $equal;
    }
    public function getEqual() : ?QualitativeValue
    {
        return $this->equal;
    }
    public function setGreater(?QualitativeValue $greater) : void
    {
        $this->greater = $greater;
    }
    public function getGreater() : ?QualitativeValue
    {
        return $this->greater;
    }
    public function setNonEqual(?QualitativeValue $nonEqual) : void
    {
        $this->nonEqual = $nonEqual;
    }
    public function getNonEqual() : ?QualitativeValue
    {
        return $this->nonEqual;
    }
    public function setAdditionalProperty(?PropertyValue $additionalProperty) : void
    {
        $this->additionalProperty = $additionalProperty;
    }
    public function getAdditionalProperty() : ?PropertyValue
    {
        return $this->additionalProperty;
    }
    public function setLesserOrEqual(?QualitativeValue $lesserOrEqual) : void
    {
        $this->lesserOrEqual = $lesserOrEqual;
    }
    public function getLesserOrEqual() : ?QualitativeValue
    {
        return $this->lesserOrEqual;
    }
    public function jsonSerialize()
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('valueReference' => $this->valueReference, 'greaterOrEqual' => $this->greaterOrEqual, 'lesser' => $this->lesser, 'equal' => $this->equal, 'greater' => $this->greater, 'nonEqual' => $this->nonEqual, 'additionalProperty' => $this->additionalProperty, 'lesserOrEqual' => $this->lesserOrEqual), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

