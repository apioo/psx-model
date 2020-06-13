<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
* @Description("An accommodation is a place that can accommodate human beings, e.g. a hotel room, a camping pitch, or a meeting room. Many accommodations are for overnight stays, but this is not a mandatory requirement.
For more specific types of accommodations not defined in schema.org, one can use additionalType with external vocabularies.
<br /><br />
See also the <a href=""/docs/hotels.html"">dedicated document on the use of schema.org for marking up hotels and other forms of accommodations</a>.")
*/
class Accommodation extends Place
{
    /**
     * @var QuantitativeValue|null
     */
    protected $floorSize;
    /**
     * @var float|QuantitativeValue|null
     */
    protected $numberOfRooms;
    /**
     * @var LocationFeatureSpecification|null
     */
    protected $amenityFeature;
    /**
     * @var string|null
     */
    protected $permittedUsage;
    /**
     * @var bool|string|null
     */
    protected $petsAllowed;
    /**
     * @param QuantitativeValue|null $floorSize
     */
    public function setFloorSize(?QuantitativeValue $floorSize) : void
    {
        $this->floorSize = $floorSize;
    }
    /**
     * @return QuantitativeValue|null
     */
    public function getFloorSize() : ?QuantitativeValue
    {
        return $this->floorSize;
    }
    /**
     * @param float|QuantitativeValue|null $numberOfRooms
     */
    public function setNumberOfRooms($numberOfRooms) : void
    {
        $this->numberOfRooms = $numberOfRooms;
    }
    /**
     * @return float|QuantitativeValue|null
     */
    public function getNumberOfRooms()
    {
        return $this->numberOfRooms;
    }
    /**
     * @param LocationFeatureSpecification|null $amenityFeature
     */
    public function setAmenityFeature(?LocationFeatureSpecification $amenityFeature) : void
    {
        $this->amenityFeature = $amenityFeature;
    }
    /**
     * @return LocationFeatureSpecification|null
     */
    public function getAmenityFeature() : ?LocationFeatureSpecification
    {
        return $this->amenityFeature;
    }
    /**
     * @param string|null $permittedUsage
     */
    public function setPermittedUsage(?string $permittedUsage) : void
    {
        $this->permittedUsage = $permittedUsage;
    }
    /**
     * @return string|null
     */
    public function getPermittedUsage() : ?string
    {
        return $this->permittedUsage;
    }
    /**
     * @param bool|string|null $petsAllowed
     */
    public function setPetsAllowed($petsAllowed) : void
    {
        $this->petsAllowed = $petsAllowed;
    }
    /**
     * @return bool|string|null
     */
    public function getPetsAllowed()
    {
        return $this->petsAllowed;
    }
}
