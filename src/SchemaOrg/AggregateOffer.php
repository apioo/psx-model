<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
* @Description("When a single product is associated with multiple offers (for example, the same pair of shoes is offered by different merchants), then AggregateOffer can be used.<br/><br/>

Note: AggregateOffers are normally expected to associate multiple offers that all share the same defined <a class=""localLink"" href=""http://schema.org/businessFunction"">businessFunction</a> value, or default to http://purl.org/goodrelations/v1#Sell if businessFunction is not explicitly defined.")
*/
class AggregateOffer extends Offer implements \JsonSerializable
{
    /**
     * @var string|float|null
     */
    protected $highPrice;
    /**
     * @var string|float|null
     */
    protected $lowPrice;
    /**
     * @var int|null
     */
    protected $offerCount;
    /**
     * @var Trip|Event|Product|Offer|Demand|Service|CreativeWork|MenuItem|null
     */
    protected $itemOffered;
    /**
     * @var Offer|Demand|null
     */
    protected $offers;
    /**
     * @param string|float|null $highPrice
     */
    public function setHighPrice($highPrice) : void
    {
        $this->highPrice = $highPrice;
    }
    /**
     * @return string|float|null
     */
    public function getHighPrice()
    {
        return $this->highPrice;
    }
    /**
     * @param string|float|null $lowPrice
     */
    public function setLowPrice($lowPrice) : void
    {
        $this->lowPrice = $lowPrice;
    }
    /**
     * @return string|float|null
     */
    public function getLowPrice()
    {
        return $this->lowPrice;
    }
    /**
     * @param int|null $offerCount
     */
    public function setOfferCount(?int $offerCount) : void
    {
        $this->offerCount = $offerCount;
    }
    /**
     * @return int|null
     */
    public function getOfferCount() : ?int
    {
        return $this->offerCount;
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
        return (object) array_filter(array('highPrice' => $this->highPrice, 'lowPrice' => $this->lowPrice, 'offerCount' => $this->offerCount, 'itemOffered' => $this->itemOffered, 'offers' => $this->offers), static function ($value) : bool {
            return $value !== null;
        });
    }
}
