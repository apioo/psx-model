<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
 * @Description("Entities that have a somewhat fixed, physical extension.")
 */
class Place extends Thing implements \JsonSerializable
{
    /**
     * @var string|null
     */
    protected $telephone;
    /**
     * @var Place|null
     */
    protected $geoContains;
    /**
     * @var string|float|null
     */
    protected $longitude;
    /**
     * @var Event|null
     */
    protected $event;
    /**
     * @var Place|null
     */
    protected $geoWithin;
    /**
     * @var \PSX\Uri\Uri|Map|null
     */
    protected $hasMap;
    /**
     * @var LocationFeatureSpecification|null
     */
    protected $amenityFeature;
    /**
     * @var Place|null
     */
    protected $geoEquals;
    /**
     * @var Place|null
     */
    protected $geoCrosses;
    /**
     * @var Place|null
     */
    protected $geoOverlaps;
    /**
     * @var Place|null
     */
    protected $geoCoveredBy;
    /**
     * @var Place|null
     */
    protected $containedInPlace;
    /**
     * @var AggregateRating|null
     */
    protected $aggregateRating;
    /**
     * @var GeoCoordinates|GeoShape|null
     */
    protected $geo;
    /**
     * @var string|null
     */
    protected $faxNumber;
    /**
     * @var Review|null
     */
    protected $review;
    /**
     * @var string|null
     */
    protected $isicV4;
    /**
     * @var Photograph|ImageObject|null
     */
    protected $photo;
    /**
     * @var Place|null
     */
    protected $geoDisjoint;
    /**
     * @var int|null
     */
    protected $maximumAttendeeCapacity;
    /**
     * @var string|null
     */
    protected $globalLocationNumber;
    /**
     * @var OpeningHoursSpecification|null
     */
    protected $specialOpeningHoursSpecification;
    /**
     * @var bool|null
     */
    protected $publicAccess;
    /**
     * @var Place|null
     */
    protected $geoCovers;
    /**
     * @var \PSX\Uri\Uri|ImageObject|null
     */
    protected $logo;
    /**
     * @var string|float|null
     */
    protected $latitude;
    /**
     * @var bool|null
     */
    protected $isAccessibleForFree;
    /**
     * @var PropertyValue|null
     */
    protected $additionalProperty;
    /**
     * @var string|PostalAddress|null
     */
    protected $address;
    /**
     * @var Place|null
     */
    protected $geoIntersects;
    /**
     * @var string|null
     */
    protected $slogan;
    /**
     * @var Place|null
     */
    protected $geoTouches;
    /**
     * @var string|null
     */
    protected $branchCode;
    /**
     * @var bool|null
     */
    protected $smokingAllowed;
    /**
     * @var OpeningHoursSpecification|null
     */
    protected $openingHoursSpecification;
    /**
     * @var Place|null
     */
    protected $containsPlace;
    /**
     * @param string|null $telephone
     */
    public function setTelephone(?string $telephone) : void
    {
        $this->telephone = $telephone;
    }
    /**
     * @return string|null
     */
    public function getTelephone() : ?string
    {
        return $this->telephone;
    }
    /**
     * @param Place|null $geoContains
     */
    public function setGeoContains(?Place $geoContains) : void
    {
        $this->geoContains = $geoContains;
    }
    /**
     * @return Place|null
     */
    public function getGeoContains() : ?Place
    {
        return $this->geoContains;
    }
    /**
     * @param string|float|null $longitude
     */
    public function setLongitude($longitude) : void
    {
        $this->longitude = $longitude;
    }
    /**
     * @return string|float|null
     */
    public function getLongitude()
    {
        return $this->longitude;
    }
    /**
     * @param Event|null $event
     */
    public function setEvent(?Event $event) : void
    {
        $this->event = $event;
    }
    /**
     * @return Event|null
     */
    public function getEvent() : ?Event
    {
        return $this->event;
    }
    /**
     * @param Place|null $geoWithin
     */
    public function setGeoWithin(?Place $geoWithin) : void
    {
        $this->geoWithin = $geoWithin;
    }
    /**
     * @return Place|null
     */
    public function getGeoWithin() : ?Place
    {
        return $this->geoWithin;
    }
    /**
     * @param \PSX\Uri\Uri|Map|null $hasMap
     */
    public function setHasMap($hasMap) : void
    {
        $this->hasMap = $hasMap;
    }
    /**
     * @return \PSX\Uri\Uri|Map|null
     */
    public function getHasMap()
    {
        return $this->hasMap;
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
     * @param Place|null $geoEquals
     */
    public function setGeoEquals(?Place $geoEquals) : void
    {
        $this->geoEquals = $geoEquals;
    }
    /**
     * @return Place|null
     */
    public function getGeoEquals() : ?Place
    {
        return $this->geoEquals;
    }
    /**
     * @param Place|null $geoCrosses
     */
    public function setGeoCrosses(?Place $geoCrosses) : void
    {
        $this->geoCrosses = $geoCrosses;
    }
    /**
     * @return Place|null
     */
    public function getGeoCrosses() : ?Place
    {
        return $this->geoCrosses;
    }
    /**
     * @param Place|null $geoOverlaps
     */
    public function setGeoOverlaps(?Place $geoOverlaps) : void
    {
        $this->geoOverlaps = $geoOverlaps;
    }
    /**
     * @return Place|null
     */
    public function getGeoOverlaps() : ?Place
    {
        return $this->geoOverlaps;
    }
    /**
     * @param Place|null $geoCoveredBy
     */
    public function setGeoCoveredBy(?Place $geoCoveredBy) : void
    {
        $this->geoCoveredBy = $geoCoveredBy;
    }
    /**
     * @return Place|null
     */
    public function getGeoCoveredBy() : ?Place
    {
        return $this->geoCoveredBy;
    }
    /**
     * @param Place|null $containedInPlace
     */
    public function setContainedInPlace(?Place $containedInPlace) : void
    {
        $this->containedInPlace = $containedInPlace;
    }
    /**
     * @return Place|null
     */
    public function getContainedInPlace() : ?Place
    {
        return $this->containedInPlace;
    }
    /**
     * @param AggregateRating|null $aggregateRating
     */
    public function setAggregateRating(?AggregateRating $aggregateRating) : void
    {
        $this->aggregateRating = $aggregateRating;
    }
    /**
     * @return AggregateRating|null
     */
    public function getAggregateRating() : ?AggregateRating
    {
        return $this->aggregateRating;
    }
    /**
     * @param GeoCoordinates|GeoShape|null $geo
     */
    public function setGeo($geo) : void
    {
        $this->geo = $geo;
    }
    /**
     * @return GeoCoordinates|GeoShape|null
     */
    public function getGeo()
    {
        return $this->geo;
    }
    /**
     * @param string|null $faxNumber
     */
    public function setFaxNumber(?string $faxNumber) : void
    {
        $this->faxNumber = $faxNumber;
    }
    /**
     * @return string|null
     */
    public function getFaxNumber() : ?string
    {
        return $this->faxNumber;
    }
    /**
     * @param Review|null $review
     */
    public function setReview(?Review $review) : void
    {
        $this->review = $review;
    }
    /**
     * @return Review|null
     */
    public function getReview() : ?Review
    {
        return $this->review;
    }
    /**
     * @param string|null $isicV4
     */
    public function setIsicV4(?string $isicV4) : void
    {
        $this->isicV4 = $isicV4;
    }
    /**
     * @return string|null
     */
    public function getIsicV4() : ?string
    {
        return $this->isicV4;
    }
    /**
     * @param Photograph|ImageObject|null $photo
     */
    public function setPhoto($photo) : void
    {
        $this->photo = $photo;
    }
    /**
     * @return Photograph|ImageObject|null
     */
    public function getPhoto()
    {
        return $this->photo;
    }
    /**
     * @param Place|null $geoDisjoint
     */
    public function setGeoDisjoint(?Place $geoDisjoint) : void
    {
        $this->geoDisjoint = $geoDisjoint;
    }
    /**
     * @return Place|null
     */
    public function getGeoDisjoint() : ?Place
    {
        return $this->geoDisjoint;
    }
    /**
     * @param int|null $maximumAttendeeCapacity
     */
    public function setMaximumAttendeeCapacity(?int $maximumAttendeeCapacity) : void
    {
        $this->maximumAttendeeCapacity = $maximumAttendeeCapacity;
    }
    /**
     * @return int|null
     */
    public function getMaximumAttendeeCapacity() : ?int
    {
        return $this->maximumAttendeeCapacity;
    }
    /**
     * @param string|null $globalLocationNumber
     */
    public function setGlobalLocationNumber(?string $globalLocationNumber) : void
    {
        $this->globalLocationNumber = $globalLocationNumber;
    }
    /**
     * @return string|null
     */
    public function getGlobalLocationNumber() : ?string
    {
        return $this->globalLocationNumber;
    }
    /**
     * @param OpeningHoursSpecification|null $specialOpeningHoursSpecification
     */
    public function setSpecialOpeningHoursSpecification(?OpeningHoursSpecification $specialOpeningHoursSpecification) : void
    {
        $this->specialOpeningHoursSpecification = $specialOpeningHoursSpecification;
    }
    /**
     * @return OpeningHoursSpecification|null
     */
    public function getSpecialOpeningHoursSpecification() : ?OpeningHoursSpecification
    {
        return $this->specialOpeningHoursSpecification;
    }
    /**
     * @param bool|null $publicAccess
     */
    public function setPublicAccess(?bool $publicAccess) : void
    {
        $this->publicAccess = $publicAccess;
    }
    /**
     * @return bool|null
     */
    public function getPublicAccess() : ?bool
    {
        return $this->publicAccess;
    }
    /**
     * @param Place|null $geoCovers
     */
    public function setGeoCovers(?Place $geoCovers) : void
    {
        $this->geoCovers = $geoCovers;
    }
    /**
     * @return Place|null
     */
    public function getGeoCovers() : ?Place
    {
        return $this->geoCovers;
    }
    /**
     * @param \PSX\Uri\Uri|ImageObject|null $logo
     */
    public function setLogo($logo) : void
    {
        $this->logo = $logo;
    }
    /**
     * @return \PSX\Uri\Uri|ImageObject|null
     */
    public function getLogo()
    {
        return $this->logo;
    }
    /**
     * @param string|float|null $latitude
     */
    public function setLatitude($latitude) : void
    {
        $this->latitude = $latitude;
    }
    /**
     * @return string|float|null
     */
    public function getLatitude()
    {
        return $this->latitude;
    }
    /**
     * @param bool|null $isAccessibleForFree
     */
    public function setIsAccessibleForFree(?bool $isAccessibleForFree) : void
    {
        $this->isAccessibleForFree = $isAccessibleForFree;
    }
    /**
     * @return bool|null
     */
    public function getIsAccessibleForFree() : ?bool
    {
        return $this->isAccessibleForFree;
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
     * @param string|PostalAddress|null $address
     */
    public function setAddress($address) : void
    {
        $this->address = $address;
    }
    /**
     * @return string|PostalAddress|null
     */
    public function getAddress()
    {
        return $this->address;
    }
    /**
     * @param Place|null $geoIntersects
     */
    public function setGeoIntersects(?Place $geoIntersects) : void
    {
        $this->geoIntersects = $geoIntersects;
    }
    /**
     * @return Place|null
     */
    public function getGeoIntersects() : ?Place
    {
        return $this->geoIntersects;
    }
    /**
     * @param string|null $slogan
     */
    public function setSlogan(?string $slogan) : void
    {
        $this->slogan = $slogan;
    }
    /**
     * @return string|null
     */
    public function getSlogan() : ?string
    {
        return $this->slogan;
    }
    /**
     * @param Place|null $geoTouches
     */
    public function setGeoTouches(?Place $geoTouches) : void
    {
        $this->geoTouches = $geoTouches;
    }
    /**
     * @return Place|null
     */
    public function getGeoTouches() : ?Place
    {
        return $this->geoTouches;
    }
    /**
     * @param string|null $branchCode
     */
    public function setBranchCode(?string $branchCode) : void
    {
        $this->branchCode = $branchCode;
    }
    /**
     * @return string|null
     */
    public function getBranchCode() : ?string
    {
        return $this->branchCode;
    }
    /**
     * @param bool|null $smokingAllowed
     */
    public function setSmokingAllowed(?bool $smokingAllowed) : void
    {
        $this->smokingAllowed = $smokingAllowed;
    }
    /**
     * @return bool|null
     */
    public function getSmokingAllowed() : ?bool
    {
        return $this->smokingAllowed;
    }
    /**
     * @param OpeningHoursSpecification|null $openingHoursSpecification
     */
    public function setOpeningHoursSpecification(?OpeningHoursSpecification $openingHoursSpecification) : void
    {
        $this->openingHoursSpecification = $openingHoursSpecification;
    }
    /**
     * @return OpeningHoursSpecification|null
     */
    public function getOpeningHoursSpecification() : ?OpeningHoursSpecification
    {
        return $this->openingHoursSpecification;
    }
    /**
     * @param Place|null $containsPlace
     */
    public function setContainsPlace(?Place $containsPlace) : void
    {
        $this->containsPlace = $containsPlace;
    }
    /**
     * @return Place|null
     */
    public function getContainsPlace() : ?Place
    {
        return $this->containsPlace;
    }
    public function jsonSerialize()
    {
        return (object) array_filter(array('telephone' => $this->telephone, 'geoContains' => $this->geoContains, 'longitude' => $this->longitude, 'event' => $this->event, 'geoWithin' => $this->geoWithin, 'hasMap' => $this->hasMap, 'amenityFeature' => $this->amenityFeature, 'geoEquals' => $this->geoEquals, 'geoCrosses' => $this->geoCrosses, 'geoOverlaps' => $this->geoOverlaps, 'geoCoveredBy' => $this->geoCoveredBy, 'containedInPlace' => $this->containedInPlace, 'aggregateRating' => $this->aggregateRating, 'geo' => $this->geo, 'faxNumber' => $this->faxNumber, 'review' => $this->review, 'isicV4' => $this->isicV4, 'photo' => $this->photo, 'geoDisjoint' => $this->geoDisjoint, 'maximumAttendeeCapacity' => $this->maximumAttendeeCapacity, 'globalLocationNumber' => $this->globalLocationNumber, 'specialOpeningHoursSpecification' => $this->specialOpeningHoursSpecification, 'publicAccess' => $this->publicAccess, 'geoCovers' => $this->geoCovers, 'logo' => $this->logo, 'latitude' => $this->latitude, 'isAccessibleForFree' => $this->isAccessibleForFree, 'additionalProperty' => $this->additionalProperty, 'address' => $this->address, 'geoIntersects' => $this->geoIntersects, 'slogan' => $this->slogan, 'geoTouches' => $this->geoTouches, 'branchCode' => $this->branchCode, 'smokingAllowed' => $this->smokingAllowed, 'openingHoursSpecification' => $this->openingHoursSpecification, 'containsPlace' => $this->containsPlace), static function ($value) : bool {
            return $value !== null;
        });
    }
}
