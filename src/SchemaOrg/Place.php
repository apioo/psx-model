<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;
use PSX\Schema\Attribute\Key;

#[Description('Entities that have a somewhat fixed, physical extension.')]
class Place extends Thing implements \JsonSerializable
{
    protected ?string $telephone = null;
    protected ?Place $geoContains = null;
    protected string|float|null $longitude = null;
    protected ?Event $event = null;
    protected ?Place $geoWithin = null;
    protected \PSX\Uri\Uri|Map|null $hasMap = null;
    protected ?LocationFeatureSpecification $amenityFeature = null;
    protected ?Place $geoEquals = null;
    protected ?Place $geoCrosses = null;
    protected ?Place $geoOverlaps = null;
    protected ?Place $geoCoveredBy = null;
    protected ?Place $containedInPlace = null;
    protected ?AggregateRating $aggregateRating = null;
    protected GeoCoordinates|GeoShape|null $geo = null;
    protected ?string $faxNumber = null;
    protected ?Review $review = null;
    #[Key('isicV4')]
    protected ?string $isicV = null;
    protected Photograph|ImageObject|null $photo = null;
    protected ?Place $geoDisjoint = null;
    protected ?int $maximumAttendeeCapacity = null;
    protected ?string $globalLocationNumber = null;
    protected ?OpeningHoursSpecification $specialOpeningHoursSpecification = null;
    protected ?bool $publicAccess = null;
    protected ?Place $geoCovers = null;
    protected \PSX\Uri\Uri|ImageObject|null $logo = null;
    protected string|float|null $latitude = null;
    protected ?bool $isAccessibleForFree = null;
    protected ?PropertyValue $additionalProperty = null;
    protected string|PostalAddress|null $address = null;
    protected ?Place $geoIntersects = null;
    protected ?string $slogan = null;
    protected ?Place $geoTouches = null;
    protected ?string $branchCode = null;
    protected ?bool $smokingAllowed = null;
    protected ?OpeningHoursSpecification $openingHoursSpecification = null;
    protected ?Place $containsPlace = null;
    public function setTelephone(?string $telephone) : void
    {
        $this->telephone = $telephone;
    }
    public function getTelephone() : ?string
    {
        return $this->telephone;
    }
    public function setGeoContains(?Place $geoContains) : void
    {
        $this->geoContains = $geoContains;
    }
    public function getGeoContains() : ?Place
    {
        return $this->geoContains;
    }
    public function setLongitude(string|float|null $longitude) : void
    {
        $this->longitude = $longitude;
    }
    public function getLongitude() : string|float|null
    {
        return $this->longitude;
    }
    public function setEvent(?Event $event) : void
    {
        $this->event = $event;
    }
    public function getEvent() : ?Event
    {
        return $this->event;
    }
    public function setGeoWithin(?Place $geoWithin) : void
    {
        $this->geoWithin = $geoWithin;
    }
    public function getGeoWithin() : ?Place
    {
        return $this->geoWithin;
    }
    public function setHasMap(\PSX\Uri\Uri|Map|null $hasMap) : void
    {
        $this->hasMap = $hasMap;
    }
    public function getHasMap() : \PSX\Uri\Uri|Map|null
    {
        return $this->hasMap;
    }
    public function setAmenityFeature(?LocationFeatureSpecification $amenityFeature) : void
    {
        $this->amenityFeature = $amenityFeature;
    }
    public function getAmenityFeature() : ?LocationFeatureSpecification
    {
        return $this->amenityFeature;
    }
    public function setGeoEquals(?Place $geoEquals) : void
    {
        $this->geoEquals = $geoEquals;
    }
    public function getGeoEquals() : ?Place
    {
        return $this->geoEquals;
    }
    public function setGeoCrosses(?Place $geoCrosses) : void
    {
        $this->geoCrosses = $geoCrosses;
    }
    public function getGeoCrosses() : ?Place
    {
        return $this->geoCrosses;
    }
    public function setGeoOverlaps(?Place $geoOverlaps) : void
    {
        $this->geoOverlaps = $geoOverlaps;
    }
    public function getGeoOverlaps() : ?Place
    {
        return $this->geoOverlaps;
    }
    public function setGeoCoveredBy(?Place $geoCoveredBy) : void
    {
        $this->geoCoveredBy = $geoCoveredBy;
    }
    public function getGeoCoveredBy() : ?Place
    {
        return $this->geoCoveredBy;
    }
    public function setContainedInPlace(?Place $containedInPlace) : void
    {
        $this->containedInPlace = $containedInPlace;
    }
    public function getContainedInPlace() : ?Place
    {
        return $this->containedInPlace;
    }
    public function setAggregateRating(?AggregateRating $aggregateRating) : void
    {
        $this->aggregateRating = $aggregateRating;
    }
    public function getAggregateRating() : ?AggregateRating
    {
        return $this->aggregateRating;
    }
    public function setGeo(GeoCoordinates|GeoShape|null $geo) : void
    {
        $this->geo = $geo;
    }
    public function getGeo() : GeoCoordinates|GeoShape|null
    {
        return $this->geo;
    }
    public function setFaxNumber(?string $faxNumber) : void
    {
        $this->faxNumber = $faxNumber;
    }
    public function getFaxNumber() : ?string
    {
        return $this->faxNumber;
    }
    public function setReview(?Review $review) : void
    {
        $this->review = $review;
    }
    public function getReview() : ?Review
    {
        return $this->review;
    }
    public function setIsicV(?string $isicV) : void
    {
        $this->isicV = $isicV;
    }
    public function getIsicV() : ?string
    {
        return $this->isicV;
    }
    public function setPhoto(Photograph|ImageObject|null $photo) : void
    {
        $this->photo = $photo;
    }
    public function getPhoto() : Photograph|ImageObject|null
    {
        return $this->photo;
    }
    public function setGeoDisjoint(?Place $geoDisjoint) : void
    {
        $this->geoDisjoint = $geoDisjoint;
    }
    public function getGeoDisjoint() : ?Place
    {
        return $this->geoDisjoint;
    }
    public function setMaximumAttendeeCapacity(?int $maximumAttendeeCapacity) : void
    {
        $this->maximumAttendeeCapacity = $maximumAttendeeCapacity;
    }
    public function getMaximumAttendeeCapacity() : ?int
    {
        return $this->maximumAttendeeCapacity;
    }
    public function setGlobalLocationNumber(?string $globalLocationNumber) : void
    {
        $this->globalLocationNumber = $globalLocationNumber;
    }
    public function getGlobalLocationNumber() : ?string
    {
        return $this->globalLocationNumber;
    }
    public function setSpecialOpeningHoursSpecification(?OpeningHoursSpecification $specialOpeningHoursSpecification) : void
    {
        $this->specialOpeningHoursSpecification = $specialOpeningHoursSpecification;
    }
    public function getSpecialOpeningHoursSpecification() : ?OpeningHoursSpecification
    {
        return $this->specialOpeningHoursSpecification;
    }
    public function setPublicAccess(?bool $publicAccess) : void
    {
        $this->publicAccess = $publicAccess;
    }
    public function getPublicAccess() : ?bool
    {
        return $this->publicAccess;
    }
    public function setGeoCovers(?Place $geoCovers) : void
    {
        $this->geoCovers = $geoCovers;
    }
    public function getGeoCovers() : ?Place
    {
        return $this->geoCovers;
    }
    public function setLogo(\PSX\Uri\Uri|ImageObject|null $logo) : void
    {
        $this->logo = $logo;
    }
    public function getLogo() : \PSX\Uri\Uri|ImageObject|null
    {
        return $this->logo;
    }
    public function setLatitude(string|float|null $latitude) : void
    {
        $this->latitude = $latitude;
    }
    public function getLatitude() : string|float|null
    {
        return $this->latitude;
    }
    public function setIsAccessibleForFree(?bool $isAccessibleForFree) : void
    {
        $this->isAccessibleForFree = $isAccessibleForFree;
    }
    public function getIsAccessibleForFree() : ?bool
    {
        return $this->isAccessibleForFree;
    }
    public function setAdditionalProperty(?PropertyValue $additionalProperty) : void
    {
        $this->additionalProperty = $additionalProperty;
    }
    public function getAdditionalProperty() : ?PropertyValue
    {
        return $this->additionalProperty;
    }
    public function setAddress(string|PostalAddress|null $address) : void
    {
        $this->address = $address;
    }
    public function getAddress() : string|PostalAddress|null
    {
        return $this->address;
    }
    public function setGeoIntersects(?Place $geoIntersects) : void
    {
        $this->geoIntersects = $geoIntersects;
    }
    public function getGeoIntersects() : ?Place
    {
        return $this->geoIntersects;
    }
    public function setSlogan(?string $slogan) : void
    {
        $this->slogan = $slogan;
    }
    public function getSlogan() : ?string
    {
        return $this->slogan;
    }
    public function setGeoTouches(?Place $geoTouches) : void
    {
        $this->geoTouches = $geoTouches;
    }
    public function getGeoTouches() : ?Place
    {
        return $this->geoTouches;
    }
    public function setBranchCode(?string $branchCode) : void
    {
        $this->branchCode = $branchCode;
    }
    public function getBranchCode() : ?string
    {
        return $this->branchCode;
    }
    public function setSmokingAllowed(?bool $smokingAllowed) : void
    {
        $this->smokingAllowed = $smokingAllowed;
    }
    public function getSmokingAllowed() : ?bool
    {
        return $this->smokingAllowed;
    }
    public function setOpeningHoursSpecification(?OpeningHoursSpecification $openingHoursSpecification) : void
    {
        $this->openingHoursSpecification = $openingHoursSpecification;
    }
    public function getOpeningHoursSpecification() : ?OpeningHoursSpecification
    {
        return $this->openingHoursSpecification;
    }
    public function setContainsPlace(?Place $containsPlace) : void
    {
        $this->containsPlace = $containsPlace;
    }
    public function getContainsPlace() : ?Place
    {
        return $this->containsPlace;
    }
    public function jsonSerialize() : object
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('telephone' => $this->telephone, 'geoContains' => $this->geoContains, 'longitude' => $this->longitude, 'event' => $this->event, 'geoWithin' => $this->geoWithin, 'hasMap' => $this->hasMap, 'amenityFeature' => $this->amenityFeature, 'geoEquals' => $this->geoEquals, 'geoCrosses' => $this->geoCrosses, 'geoOverlaps' => $this->geoOverlaps, 'geoCoveredBy' => $this->geoCoveredBy, 'containedInPlace' => $this->containedInPlace, 'aggregateRating' => $this->aggregateRating, 'geo' => $this->geo, 'faxNumber' => $this->faxNumber, 'review' => $this->review, 'isicV4' => $this->isicV, 'photo' => $this->photo, 'geoDisjoint' => $this->geoDisjoint, 'maximumAttendeeCapacity' => $this->maximumAttendeeCapacity, 'globalLocationNumber' => $this->globalLocationNumber, 'specialOpeningHoursSpecification' => $this->specialOpeningHoursSpecification, 'publicAccess' => $this->publicAccess, 'geoCovers' => $this->geoCovers, 'logo' => $this->logo, 'latitude' => $this->latitude, 'isAccessibleForFree' => $this->isAccessibleForFree, 'additionalProperty' => $this->additionalProperty, 'address' => $this->address, 'geoIntersects' => $this->geoIntersects, 'slogan' => $this->slogan, 'geoTouches' => $this->geoTouches, 'branchCode' => $this->branchCode, 'smokingAllowed' => $this->smokingAllowed, 'openingHoursSpecification' => $this->openingHoursSpecification, 'containsPlace' => $this->containsPlace), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

