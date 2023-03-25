<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('Specifies a location feature by providing a structured value representing a feature of an accommodation as a property-value pair of varying degrees of formality.')]
class LocationFeatureSpecification extends PropertyValue implements \JsonSerializable
{
    protected \PSX\DateTime\LocalDate|\PSX\DateTime\LocalDateTime|null $validThrough = null;
    protected ?OpeningHoursSpecification $hoursAvailable = null;
    protected \PSX\DateTime\LocalDate|\PSX\DateTime\LocalDateTime|null $validFrom = null;
    public function setValidThrough(\PSX\DateTime\LocalDate|\PSX\DateTime\LocalDateTime|null $validThrough) : void
    {
        $this->validThrough = $validThrough;
    }
    public function getValidThrough() : \PSX\DateTime\LocalDate|\PSX\DateTime\LocalDateTime|null
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
    public function setValidFrom(\PSX\DateTime\LocalDate|\PSX\DateTime\LocalDateTime|null $validFrom) : void
    {
        $this->validFrom = $validFrom;
    }
    public function getValidFrom() : \PSX\DateTime\LocalDate|\PSX\DateTime\LocalDateTime|null
    {
        return $this->validFrom;
    }
    public function jsonSerialize() : object
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('validThrough' => $this->validThrough, 'hoursAvailable' => $this->hoursAvailable, 'validFrom' => $this->validFrom), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

