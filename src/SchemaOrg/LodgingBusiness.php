<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A lodging business, such as a motel, hotel, or inn.')]
class LodgingBusiness extends LocalBusiness implements \JsonSerializable
{
    protected ?Audience $audience = null;
    protected string|Language|null $availableLanguage = null;
    protected float|QuantitativeValue|null $numberOfRooms = null;
    protected ?LocationFeatureSpecification $amenityFeature = null;
    protected ?Rating $starRating = null;
    protected bool|string|null $petsAllowed = null;
    protected \DateTime|\PSX\DateTime\Time|null $checkoutTime = null;
    protected \DateTime|\PSX\DateTime\Time|null $checkinTime = null;
    public function setAudience(?Audience $audience) : void
    {
        $this->audience = $audience;
    }
    public function getAudience() : ?Audience
    {
        return $this->audience;
    }
    public function setAvailableLanguage(string|Language|null $availableLanguage) : void
    {
        $this->availableLanguage = $availableLanguage;
    }
    public function getAvailableLanguage() : string|Language|null
    {
        return $this->availableLanguage;
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
    public function setStarRating(?Rating $starRating) : void
    {
        $this->starRating = $starRating;
    }
    public function getStarRating() : ?Rating
    {
        return $this->starRating;
    }
    public function setPetsAllowed(bool|string|null $petsAllowed) : void
    {
        $this->petsAllowed = $petsAllowed;
    }
    public function getPetsAllowed() : bool|string|null
    {
        return $this->petsAllowed;
    }
    public function setCheckoutTime(\DateTime|\PSX\DateTime\Time|null $checkoutTime) : void
    {
        $this->checkoutTime = $checkoutTime;
    }
    public function getCheckoutTime() : \DateTime|\PSX\DateTime\Time|null
    {
        return $this->checkoutTime;
    }
    public function setCheckinTime(\DateTime|\PSX\DateTime\Time|null $checkinTime) : void
    {
        $this->checkinTime = $checkinTime;
    }
    public function getCheckinTime() : \DateTime|\PSX\DateTime\Time|null
    {
        return $this->checkinTime;
    }
    public function jsonSerialize()
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('audience' => $this->audience, 'availableLanguage' => $this->availableLanguage, 'numberOfRooms' => $this->numberOfRooms, 'amenityFeature' => $this->amenityFeature, 'starRating' => $this->starRating, 'petsAllowed' => $this->petsAllowed, 'checkoutTime' => $this->checkoutTime, 'checkinTime' => $this->checkinTime), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

