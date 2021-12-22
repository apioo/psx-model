<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A reservation for a taxi.<br/><br/>

Note: This type is for information about actual reservations, e.g. in confirmation emails or HTML pages with individual confirmations of reservations. For offers of tickets, use <a class="localLink" href="http://schema.org/Offer">Offer</a>.')]
class TaxiReservation extends Reservation implements \JsonSerializable
{
    protected ?\DateTime $pickupTime = null;
    protected int|QuantitativeValue|null $partySize = null;
    protected ?Place $pickupLocation = null;
    public function setPickupTime(?\DateTime $pickupTime) : void
    {
        $this->pickupTime = $pickupTime;
    }
    public function getPickupTime() : ?\DateTime
    {
        return $this->pickupTime;
    }
    public function setPartySize(int|QuantitativeValue|null $partySize) : void
    {
        $this->partySize = $partySize;
    }
    public function getPartySize() : int|QuantitativeValue|null
    {
        return $this->partySize;
    }
    public function setPickupLocation(?Place $pickupLocation) : void
    {
        $this->pickupLocation = $pickupLocation;
    }
    public function getPickupLocation() : ?Place
    {
        return $this->pickupLocation;
    }
    public function jsonSerialize()
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('pickupTime' => $this->pickupTime, 'partySize' => $this->partySize, 'pickupLocation' => $this->pickupLocation), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

