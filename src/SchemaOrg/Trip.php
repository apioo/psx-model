<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A trip or journey. An itinerary of visits to one or more places.')]
class Trip extends Intangible implements \JsonSerializable
{
    protected Organization|Person|null $provider = null;
    protected \PSX\DateTime\LocalDateTime|\PSX\DateTime\LocalTime|null $departureTime = null;
    protected \PSX\DateTime\LocalTime|\PSX\DateTime\LocalDateTime|null $arrivalTime = null;
    protected Trip|Event|Product|Offer|Demand|Service|CreativeWork|MenuItem|null $itemOffered = null;
    protected Offer|Demand|null $offers = null;
    public function setProvider(Organization|Person|null $provider) : void
    {
        $this->provider = $provider;
    }
    public function getProvider() : Organization|Person|null
    {
        return $this->provider;
    }
    public function setDepartureTime(\PSX\DateTime\LocalDateTime|\PSX\DateTime\LocalTime|null $departureTime) : void
    {
        $this->departureTime = $departureTime;
    }
    public function getDepartureTime() : \PSX\DateTime\LocalDateTime|\PSX\DateTime\LocalTime|null
    {
        return $this->departureTime;
    }
    public function setArrivalTime(\PSX\DateTime\LocalTime|\PSX\DateTime\LocalDateTime|null $arrivalTime) : void
    {
        $this->arrivalTime = $arrivalTime;
    }
    public function getArrivalTime() : \PSX\DateTime\LocalTime|\PSX\DateTime\LocalDateTime|null
    {
        return $this->arrivalTime;
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
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('provider' => $this->provider, 'departureTime' => $this->departureTime, 'arrivalTime' => $this->arrivalTime, 'itemOffered' => $this->itemOffered, 'offers' => $this->offers), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

