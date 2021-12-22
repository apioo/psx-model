<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('Specifies a location feature by providing a structured value representing a feature of an accommodation as a property-value pair of varying degrees of formality.')]
class LocationFeatureSpecification extends PropertyValue implements \JsonSerializable
{
    protected \PSX\DateTime\Date|\DateTime|null $validThrough = null;
    protected ?OpeningHoursSpecification $hoursAvailable = null;
    protected \PSX\DateTime\Date|\DateTime|null $validFrom = null;
    public function setValidThrough(\PSX\DateTime\Date|\DateTime|null $validThrough) : void
    {
        $this->validThrough = $validThrough;
    }
    public function getValidThrough() : \PSX\DateTime\Date|\DateTime|null
    {
        return $this->validThrough;
    }
    public function setHoursAvailable(?OpeningHoursSpecification $hoursAvailable) : void
    {
        $this->hoursAvailable = $hoursAvailable;
    }
    public function getHoursAvailable() : ?OpeningHoursSpecification
    {
        return $this->hoursAvailable;
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
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('validThrough' => $this->validThrough, 'hoursAvailable' => $this->hoursAvailable, 'validFrom' => $this->validFrom), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

