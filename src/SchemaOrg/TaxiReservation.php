<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
* @Description("A reservation for a taxi.<br/><br/>

Note: This type is for information about actual reservations, e.g. in confirmation emails or HTML pages with individual confirmations of reservations. For offers of tickets, use <a class=""localLink"" href=""http://schema.org/Offer"">Offer</a>.")
*/
class TaxiReservation extends Reservation
{
    /**
     * @var \DateTime|null
     */
    protected $pickupTime;
    /**
     * @var int|QuantitativeValue|null
     */
    protected $partySize;
    /**
     * @var Place|null
     */
    protected $pickupLocation;
    /**
     * @param \DateTime|null $pickupTime
     */
    public function setPickupTime(?\DateTime $pickupTime) : void
    {
        $this->pickupTime = $pickupTime;
    }
    /**
     * @return \DateTime|null
     */
    public function getPickupTime() : ?\DateTime
    {
        return $this->pickupTime;
    }
    /**
     * @param int|QuantitativeValue|null $partySize
     */
    public function setPartySize($partySize) : void
    {
        $this->partySize = $partySize;
    }
    /**
     * @return int|QuantitativeValue|null
     */
    public function getPartySize()
    {
        return $this->partySize;
    }
    /**
     * @param Place|null $pickupLocation
     */
    public function setPickupLocation(?Place $pickupLocation) : void
    {
        $this->pickupLocation = $pickupLocation;
    }
    /**
     * @return Place|null
     */
    public function getPickupLocation() : ?Place
    {
        return $this->pickupLocation;
    }
}
