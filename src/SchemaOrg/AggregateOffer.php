<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('When a single product is associated with multiple offers (for example, the same pair of shoes is offered by different merchants), then AggregateOffer can be used.<br/><br/>

Note: AggregateOffers are normally expected to associate multiple offers that all share the same defined <a class="localLink" href="http://schema.org/businessFunction">businessFunction</a> value, or default to http://purl.org/goodrelations/v1#Sell if businessFunction is not explicitly defined.')]
class AggregateOffer extends Offer implements \JsonSerializable
{
    protected string|float|null $highPrice = null;
    protected string|float|null $lowPrice = null;
    protected ?int $offerCount = null;
    protected Trip|Event|Product|Offer|Demand|Service|CreativeWork|MenuItem|null $itemOffered = null;
    protected Offer|Demand|null $offers = null;
    public function setHighPrice(string|float|null $highPrice) : void
    {
        $this->highPrice = $highPrice;
    }
    public function getHighPrice() : string|float|null
    {
        return $this->highPrice;
    }
    public function setLowPrice(string|float|null $lowPrice) : void
    {
        $this->lowPrice = $lowPrice;
    }
    public function getLowPrice() : string|float|null
    {
        return $this->lowPrice;
    }
    public function setOfferCount(?int $offerCount) : void
    {
        $this->offerCount = $offerCount;
    }
    public function getOfferCount() : ?int
    {
        return $this->offerCount;
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
    public function jsonSerialize()
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('highPrice' => $this->highPrice, 'lowPrice' => $this->lowPrice, 'offerCount' => $this->offerCount, 'itemOffered' => $this->itemOffered, 'offers' => $this->offers), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

