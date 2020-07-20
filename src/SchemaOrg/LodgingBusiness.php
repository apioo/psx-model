<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
 * @Description("A lodging business, such as a motel, hotel, or inn.")
 */
class LodgingBusiness extends LocalBusiness implements \JsonSerializable
{
    /**
     * @var Audience|null
     */
    protected $audience;
    /**
     * @var string|Language|null
     */
    protected $availableLanguage;
    /**
     * @var float|QuantitativeValue|null
     */
    protected $numberOfRooms;
    /**
     * @var LocationFeatureSpecification|null
     */
    protected $amenityFeature;
    /**
     * @var Rating|null
     */
    protected $starRating;
    /**
     * @var bool|string|null
     */
    protected $petsAllowed;
    /**
     * @var \DateTime|\PSX\DateTime\Time|null
     */
    protected $checkoutTime;
    /**
     * @var \DateTime|\PSX\DateTime\Time|null
     */
    protected $checkinTime;
    /**
     * @param Audience|null $audience
     */
    public function setAudience(?Audience $audience) : void
    {
        $this->audience = $audience;
    }
    /**
     * @return Audience|null
     */
    public function getAudience() : ?Audience
    {
        return $this->audience;
    }
    /**
     * @param string|Language|null $availableLanguage
     */
    public function setAvailableLanguage($availableLanguage) : void
    {
        $this->availableLanguage = $availableLanguage;
    }
    /**
     * @return string|Language|null
     */
    public function getAvailableLanguage()
    {
        return $this->availableLanguage;
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
     * @param Rating|null $starRating
     */
    public function setStarRating(?Rating $starRating) : void
    {
        $this->starRating = $starRating;
    }
    /**
     * @return Rating|null
     */
    public function getStarRating() : ?Rating
    {
        return $this->starRating;
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
    /**
     * @param \DateTime|\PSX\DateTime\Time|null $checkoutTime
     */
    public function setCheckoutTime($checkoutTime) : void
    {
        $this->checkoutTime = $checkoutTime;
    }
    /**
     * @return \DateTime|\PSX\DateTime\Time|null
     */
    public function getCheckoutTime()
    {
        return $this->checkoutTime;
    }
    /**
     * @param \DateTime|\PSX\DateTime\Time|null $checkinTime
     */
    public function setCheckinTime($checkinTime) : void
    {
        $this->checkinTime = $checkinTime;
    }
    /**
     * @return \DateTime|\PSX\DateTime\Time|null
     */
    public function getCheckinTime()
    {
        return $this->checkinTime;
    }
    public function jsonSerialize()
    {
        return (object) array_filter(array('audience' => $this->audience, 'availableLanguage' => $this->availableLanguage, 'numberOfRooms' => $this->numberOfRooms, 'amenityFeature' => $this->amenityFeature, 'starRating' => $this->starRating, 'petsAllowed' => $this->petsAllowed, 'checkoutTime' => $this->checkoutTime, 'checkinTime' => $this->checkinTime), static function ($value) : bool {
            return $value !== null;
        });
    }
}
