<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
 * @Description("A service provided by an organization, e.g. delivery service, print services, etc.")
 */
class Service extends Intangible implements \JsonSerializable
{
    /**
     * @var Audience|null
     */
    protected $audience;
    /**
     * @var ServiceChannel|null
     */
    protected $availableChannel;
    /**
     * @var string|Place|GeoShape|null
     */
    protected $areaServed;
    /**
     * @var \PSX\Uri\Uri|Thing|string|null
     */
    protected $category;
    /**
     * @var Organization|Person|null
     */
    protected $provider;
    /**
     * @var AggregateRating|null
     */
    protected $aggregateRating;
    /**
     * @var string|null
     */
    protected $award;
    /**
     * @var Review|null
     */
    protected $review;
    /**
     * @var string|null
     */
    protected $serviceType;
    /**
     * @var Organization|Person|null
     */
    protected $broker;
    /**
     * @var Service|Product|null
     */
    protected $isSimilarTo;
    /**
     * @var OpeningHoursSpecification|null
     */
    protected $hoursAvailable;
    /**
     * @var Service|Product|null
     */
    protected $isRelatedTo;
    /**
     * @var string|null
     */
    protected $providerMobility;
    /**
     * @var \PSX\Uri\Uri|ImageObject|null
     */
    protected $logo;
    /**
     * @var Organization|Brand|null
     */
    protected $brand;
    /**
     * @var OfferCatalog|null
     */
    protected $hasOfferCatalog;
    /**
     * @var Thing|null
     */
    protected $serviceOutput;
    /**
     * @var string|null
     */
    protected $slogan;
    /**
     * @var Trip|Event|Product|Offer|Demand|Service|CreativeWork|MenuItem|null
     */
    protected $itemOffered;
    /**
     * @var Offer|Demand|null
     */
    protected $offers;
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
     * @param ServiceChannel|null $availableChannel
     */
    public function setAvailableChannel(?ServiceChannel $availableChannel) : void
    {
        $this->availableChannel = $availableChannel;
    }
    /**
     * @return ServiceChannel|null
     */
    public function getAvailableChannel() : ?ServiceChannel
    {
        return $this->availableChannel;
    }
    /**
     * @param string|Place|GeoShape|null $areaServed
     */
    public function setAreaServed($areaServed) : void
    {
        $this->areaServed = $areaServed;
    }
    /**
     * @return string|Place|GeoShape|null
     */
    public function getAreaServed()
    {
        return $this->areaServed;
    }
    /**
     * @param \PSX\Uri\Uri|Thing|string|null $category
     */
    public function setCategory($category) : void
    {
        $this->category = $category;
    }
    /**
     * @return \PSX\Uri\Uri|Thing|string|null
     */
    public function getCategory()
    {
        return $this->category;
    }
    /**
     * @param Organization|Person|null $provider
     */
    public function setProvider($provider) : void
    {
        $this->provider = $provider;
    }
    /**
     * @return Organization|Person|null
     */
    public function getProvider()
    {
        return $this->provider;
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
     * @param string|null $award
     */
    public function setAward(?string $award) : void
    {
        $this->award = $award;
    }
    /**
     * @return string|null
     */
    public function getAward() : ?string
    {
        return $this->award;
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
     * @param string|null $serviceType
     */
    public function setServiceType(?string $serviceType) : void
    {
        $this->serviceType = $serviceType;
    }
    /**
     * @return string|null
     */
    public function getServiceType() : ?string
    {
        return $this->serviceType;
    }
    /**
     * @param Organization|Person|null $broker
     */
    public function setBroker($broker) : void
    {
        $this->broker = $broker;
    }
    /**
     * @return Organization|Person|null
     */
    public function getBroker()
    {
        return $this->broker;
    }
    /**
     * @param Service|Product|null $isSimilarTo
     */
    public function setIsSimilarTo($isSimilarTo) : void
    {
        $this->isSimilarTo = $isSimilarTo;
    }
    /**
     * @return Service|Product|null
     */
    public function getIsSimilarTo()
    {
        return $this->isSimilarTo;
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
     * @param Service|Product|null $isRelatedTo
     */
    public function setIsRelatedTo($isRelatedTo) : void
    {
        $this->isRelatedTo = $isRelatedTo;
    }
    /**
     * @return Service|Product|null
     */
    public function getIsRelatedTo()
    {
        return $this->isRelatedTo;
    }
    /**
     * @param string|null $providerMobility
     */
    public function setProviderMobility(?string $providerMobility) : void
    {
        $this->providerMobility = $providerMobility;
    }
    /**
     * @return string|null
     */
    public function getProviderMobility() : ?string
    {
        return $this->providerMobility;
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
     * @param Organization|Brand|null $brand
     */
    public function setBrand($brand) : void
    {
        $this->brand = $brand;
    }
    /**
     * @return Organization|Brand|null
     */
    public function getBrand()
    {
        return $this->brand;
    }
    /**
     * @param OfferCatalog|null $hasOfferCatalog
     */
    public function setHasOfferCatalog(?OfferCatalog $hasOfferCatalog) : void
    {
        $this->hasOfferCatalog = $hasOfferCatalog;
    }
    /**
     * @return OfferCatalog|null
     */
    public function getHasOfferCatalog() : ?OfferCatalog
    {
        return $this->hasOfferCatalog;
    }
    /**
     * @param Thing|null $serviceOutput
     */
    public function setServiceOutput(?Thing $serviceOutput) : void
    {
        $this->serviceOutput = $serviceOutput;
    }
    /**
     * @return Thing|null
     */
    public function getServiceOutput() : ?Thing
    {
        return $this->serviceOutput;
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
     * @param Trip|Event|Product|Offer|Demand|Service|CreativeWork|MenuItem|null $itemOffered
     */
    public function setItemOffered($itemOffered) : void
    {
        $this->itemOffered = $itemOffered;
    }
    /**
     * @return Trip|Event|Product|Offer|Demand|Service|CreativeWork|MenuItem|null
     */
    public function getItemOffered()
    {
        return $this->itemOffered;
    }
    /**
     * @param Offer|Demand|null $offers
     */
    public function setOffers($offers) : void
    {
        $this->offers = $offers;
    }
    /**
     * @return Offer|Demand|null
     */
    public function getOffers()
    {
        return $this->offers;
    }
    public function jsonSerialize()
    {
        return array_merge(parent::jsonSerialize(), array_filter(array('audience' => $this->audience, 'availableChannel' => $this->availableChannel, 'areaServed' => $this->areaServed, 'category' => $this->category, 'provider' => $this->provider, 'aggregateRating' => $this->aggregateRating, 'award' => $this->award, 'review' => $this->review, 'serviceType' => $this->serviceType, 'broker' => $this->broker, 'isSimilarTo' => $this->isSimilarTo, 'hoursAvailable' => $this->hoursAvailable, 'isRelatedTo' => $this->isRelatedTo, 'providerMobility' => $this->providerMobility, 'logo' => $this->logo, 'brand' => $this->brand, 'hasOfferCatalog' => $this->hasOfferCatalog, 'serviceOutput' => $this->serviceOutput, 'slogan' => $this->slogan, 'itemOffered' => $this->itemOffered, 'offers' => $this->offers), static function ($value) : bool {
            return $value !== null;
        }));
    }
}
