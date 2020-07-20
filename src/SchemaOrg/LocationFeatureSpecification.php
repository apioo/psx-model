<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
 * @Description("Specifies a location feature by providing a structured value representing a feature of an accommodation as a property-value pair of varying degrees of formality.")
 */
class LocationFeatureSpecification extends PropertyValue implements \JsonSerializable
{
    /**
     * @var \PSX\DateTime\Date|\DateTime|null
     */
    protected $validThrough;
    /**
     * @var OpeningHoursSpecification|null
     */
    protected $hoursAvailable;
    /**
     * @var \PSX\DateTime\Date|\DateTime|null
     */
    protected $validFrom;
    /**
     * @param \PSX\DateTime\Date|\DateTime|null $validThrough
     */
    public function setValidThrough($validThrough) : void
    {
        $this->validThrough = $validThrough;
    }
    /**
     * @return \PSX\DateTime\Date|\DateTime|null
     */
    public function getValidThrough()
    {
        return $this->validThrough;
    }
    /**
     * @param OpeningHoursSpecification|null $hoursAvailable
     */
    public function setHoursAvailable(?OpeningHoursSpecification $hoursAvailable) : void
    {
        $this->hoursAvailable = $hoursAvailable;
    }
    /**
     * @return OpeningHoursSpecification|null
     */
    public function getHoursAvailable() : ?OpeningHoursSpecification
    {
        return $this->hoursAvailable;
    }
    /**
     * @param \PSX\DateTime\Date|\DateTime|null $validFrom
     */
    public function setValidFrom($validFrom) : void
    {
        $this->validFrom = $validFrom;
    }
    /**
     * @return \PSX\DateTime\Date|\DateTime|null
     */
    public function getValidFrom()
    {
        return $this->validFrom;
    }
    public function jsonSerialize()
    {
        return (object) array_filter(array('validThrough' => $this->validThrough, 'hoursAvailable' => $this->hoursAvailable, 'validFrom' => $this->validFrom), static function ($value) : bool {
            return $value !== null;
        });
    }
}
