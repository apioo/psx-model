<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
 * @Description("A trip or journey. An itinerary of visits to one or more places.")
 */
class Trip extends Intangible
{
    /**
     * @var Organization|Person|null
     */
    protected $provider;
    /**
     * @var \DateTime|\PSX\DateTime\Time|null
     */
    protected $departureTime;
    /**
     * @var \PSX\DateTime\Time|\DateTime|null
     */
    protected $arrivalTime;
    /**
     * @var Trip|Event|Product|Offer|Demand|Service|CreativeWork|MenuItem|null
     */
    protected $itemOffered;
    /**
     * @var Offer|Demand|null
     */
    protected $offers;
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
     * @param \DateTime|\PSX\DateTime\Time|null $departureTime
     */
    public function setDepartureTime($departureTime) : void
    {
        $this->departureTime = $departureTime;
    }
    /**
     * @return \DateTime|\PSX\DateTime\Time|null
     */
    public function getDepartureTime()
    {
        return $this->departureTime;
    }
    /**
     * @param \PSX\DateTime\Time|\DateTime|null $arrivalTime
     */
    public function setArrivalTime($arrivalTime) : void
    {
        $this->arrivalTime = $arrivalTime;
    }
    /**
     * @return \PSX\DateTime\Time|\DateTime|null
     */
    public function getArrivalTime()
    {
        return $this->arrivalTime;
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
}
