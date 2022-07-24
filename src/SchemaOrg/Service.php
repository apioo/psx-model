<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A service provided by an organization, e.g. delivery service, print services, etc.')]
class Service extends Intangible implements \JsonSerializable
{
    protected ?Audience $audience = null;
    protected ?ServiceChannel $availableChannel = null;
    protected string|Place|GeoShape|null $areaServed = null;
    protected \PSX\Uri\Uri|Thing|string|null $category = null;
    protected Organization|Person|null $provider = null;
    protected ?AggregateRating $aggregateRating = null;
    protected ?string $award = null;
    protected ?Review $review = null;
    protected ?string $serviceType = null;
    protected Organization|Person|null $broker = null;
    protected Service|Product|null $isSimilarTo = null;
    protected ?OpeningHoursSpecification $hoursAvailable = null;
    protected Service|Product|null $isRelatedTo = null;
    protected ?string $providerMobility = null;
    protected \PSX\Uri\Uri|ImageObject|null $logo = null;
    protected Organization|Brand|null $brand = null;
    protected ?OfferCatalog $hasOfferCatalog = null;
    protected ?Thing $serviceOutput = null;
    protected ?string $slogan = null;
    protected Trip|Event|Product|Offer|Demand|Service|CreativeWork|MenuItem|null $itemOffered = null;
    protected Offer|Demand|null $offers = null;
    public function setAudience(?Audience $audience) : void
    {
        $this->audience = $audience;
    }
    public function getAudience() : ?Audience
    {
        return $this->audience;
    }
    public function setAvailableChannel(?ServiceChannel $availableChannel) : void
    {
        $this->availableChannel = $availableChannel;
    }
    public function getAvailableChannel() : ?ServiceChannel
    {
        return $this->availableChannel;
    }
    public function setAreaServed(string|Place|GeoShape|null $areaServed) : void
    {
        $this->areaServed = $areaServed;
    }
    public function getAreaServed() : string|Place|GeoShape|null
    {
        return $this->areaServed;
    }
    public function setCategory(\PSX\Uri\Uri|Thing|string|null $category) : void
    {
        $this->category = $category;
    }
    public function getCategory() : \PSX\Uri\Uri|Thing|string|null
    {
        return $this->category;
    }
    public function setProvider(Organization|Person|null $provider) : void
    {
        $this->provider = $provider;
    }
    public function getProvider() : Organization|Person|null
    {
        return $this->provider;
    }
    public function setAggregateRating(?AggregateRating $aggregateRating) : void
    {
        $this->aggregateRating = $aggregateRating;
    }
    public function getAggregateRating() : ?AggregateRating
    {
        return $this->aggregateRating;
    }
    public function setAward(?string $award) : void
    {
        $this->award = $award;
    }
    public function getAward() : ?string
    {
        return $this->award;
    }
    public function setReview(?Review $review) : void
    {
        $this->review = $review;
    }
    public function getReview() : ?Review
    {
        return $this->review;
    }
    public function setServiceType(?string $serviceType) : void
    {
        $this->serviceType = $serviceType;
    }
    public function getServiceType() : ?string
    {
        return $this->serviceType;
    }
    public function setBroker(Organization|Person|null $broker) : void
    {
        $this->broker = $broker;
    }
    public function getBroker() : Organization|Person|null
    {
        return $this->broker;
    }
    public function setIsSimilarTo(Service|Product|null $isSimilarTo) : void
    {
        $this->isSimilarTo = $isSimilarTo;
    }
    public function getIsSimilarTo() : Service|Product|null
    {
        return $this->isSimilarTo;
    }
    public function setHoursAvailable(?OpeningHoursSpecification $hoursAvailable) : void
    {
        $this->hoursAvailable = $hoursAvailable;
    }
    public function getHoursAvailable() : ?OpeningHoursSpecification
    {
        return $this->hoursAvailable;
    }
    public function setIsRelatedTo(Service|Product|null $isRelatedTo) : void
    {
        $this->isRelatedTo = $isRelatedTo;
    }
    public function getIsRelatedTo() : Service|Product|null
    {
        return $this->isRelatedTo;
    }
    public function setProviderMobility(?string $providerMobility) : void
    {
        $this->providerMobility = $providerMobility;
    }
    public function getProviderMobility() : ?string
    {
        return $this->providerMobility;
    }
    public function setLogo(\PSX\Uri\Uri|ImageObject|null $logo) : void
    {
        $this->logo = $logo;
    }
    public function getLogo() : \PSX\Uri\Uri|ImageObject|null
    {
        return $this->logo;
    }
    public function setBrand(Organization|Brand|null $brand) : void
    {
        $this->brand = $brand;
    }
    public function getBrand() : Organization|Brand|null
    {
        return $this->brand;
    }
    public function setHasOfferCatalog(?OfferCatalog $hasOfferCatalog) : void
    {
        $this->hasOfferCatalog = $hasOfferCatalog;
    }
    public function getHasOfferCatalog() : ?OfferCatalog
    {
        return $this->hasOfferCatalog;
    }
    public function setServiceOutput(?Thing $serviceOutput) : void
    {
        $this->serviceOutput = $serviceOutput;
    }
    public function getServiceOutput() : ?Thing
    {
        return $this->serviceOutput;
    }
    public function setSlogan(?string $slogan) : void
    {
        $this->slogan = $slogan;
    }
    public function getSlogan() : ?string
    {
        return $this->slogan;
    }
    public function setItemOffered(Trip|Event|Product|Offer|Demand|Service|CreativeWork|MenuItem|null $itemOffered) : void
    {
        $this->itemOffered = $itemOffered;
    }
    public function getItemOffered() : Trip|Event|Product|Offer|Demand|Service|CreativeWork|MenuItem|null
    {
        return $this->itemOffered;
    }
    public function setOffers(Offer|Demand|null $offers) : void
    {
        $this->offers = $offers;
    }
    public function getOffers() : Offer|Demand|null
    {
        return $this->offers;
    }
    public function jsonSerialize() : object
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('audience' => $this->audience, 'availableChannel' => $this->availableChannel, 'areaServed' => $this->areaServed, 'category' => $this->category, 'provider' => $this->provider, 'aggregateRating' => $this->aggregateRating, 'award' => $this->award, 'review' => $this->review, 'serviceType' => $this->serviceType, 'broker' => $this->broker, 'isSimilarTo' => $this->isSimilarTo, 'hoursAvailable' => $this->hoursAvailable, 'isRelatedTo' => $this->isRelatedTo, 'providerMobility' => $this->providerMobility, 'logo' => $this->logo, 'brand' => $this->brand, 'hasOfferCatalog' => $this->hasOfferCatalog, 'serviceOutput' => $this->serviceOutput, 'slogan' => $this->slogan, 'itemOffered' => $this->itemOffered, 'offers' => $this->offers), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

