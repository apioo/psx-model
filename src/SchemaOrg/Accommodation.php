<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('An accommodation is a place that can accommodate human beings, e.g. a hotel room, a camping pitch, or a meeting room. Many accommodations are for overnight stays, but this is not a mandatory requirement.
For more specific types of accommodations not defined in schema.org, one can use additionalType with external vocabularies.
<br /><br />
See also the <a href="/docs/hotels.html">dedicated document on the use of schema.org for marking up hotels and other forms of accommodations</a>.')]
class Accommodation extends Place implements \JsonSerializable
{
    protected ?QuantitativeValue $floorSize = null;
    protected float|QuantitativeValue|null $numberOfRooms = null;
    protected ?LocationFeatureSpecification $amenityFeature = null;
    protected ?string $permittedUsage = null;
    protected bool|string|null $petsAllowed = null;
    public function setFloorSize(?QuantitativeValue $floorSize) : void
    {
        $this->floorSize = $floorSize;
    }
    public function getFloorSize() : ?QuantitativeValue
    {
        return $this->floorSize;
    }
    public function setNumberOfRooms(float|QuantitativeValue|null $numberOfRooms) : void
    {
        $this->numberOfRooms = $numberOfRooms;
    }
    public function getNumberOfRooms() : float|QuantitativeValue|null
    {
        return $this->numberOfRooms;
    }
    public function setAmenityFeature(?LocationFeatureSpecification $amenityFeature) : void
    {
        $this->amenityFeature = $amenityFeature;
    }
    public function getAmenityFeature() : ?LocationFeatureSpecification
    {
        return $this->amenityFeature;
    }
    public function setPermittedUsage(?string $permittedUsage) : void
    {
        $this->permittedUsage = $permittedUsage;
    }
    public function getPermittedUsage() : ?string
    {
        return $this->permittedUsage;
    }
    public function setPetsAllowed(bool|string|null $petsAllowed) : void
    {
        $this->petsAllowed = $petsAllowed;
    }
    public function getPetsAllowed() : bool|string|null
    {
        return $this->petsAllowed;
    }
    public function jsonSerialize() : object
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('floorSize' => $this->floorSize, 'numberOfRooms' => $this->numberOfRooms, 'amenityFeature' => $this->amenityFeature, 'permittedUsage' => $this->permittedUsage, 'petsAllowed' => $this->petsAllowed), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

