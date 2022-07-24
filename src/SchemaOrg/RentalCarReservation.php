<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A reservation for a rental car.<br/><br/>

Note: This type is for information about actual reservations, e.g. in confirmation emails or HTML pages with individual confirmations of reservations.')]
class RentalCarReservation extends Reservation implements \JsonSerializable
{
    protected ?\DateTime $dropoffTime = null;
    protected ?\DateTime $pickupTime = null;
    protected ?Place $pickupLocation = null;
    protected ?Place $dropoffLocation = null;
    public function setDropoffTime(?\DateTime $dropoffTime) : void
    {
        $this->dropoffTime = $dropoffTime;
    }
    public function getDropoffTime() : ?\DateTime
    {
        return $this->dropoffTime;
    }
    public function setPickupTime(?\DateTime $pickupTime) : void
    {
        $this->pickupTime = $pickupTime;
    }
    public function getPickupTime() : ?\DateTime
    {
        return $this->pickupTime;
    }
    public function setPickupLocation(?Place $pickupLocation) : void
    {
        $this->pickupLocation = $pickupLocation;
    }
    public function getPickupLocation() : ?Place
    {
        return $this->pickupLocation;
    }
    public function setDropoffLocation(?Place $dropoffLocation) : void
    {
        $this->dropoffLocation = $dropoffLocation;
    }
    public function getDropoffLocation() : ?Place
    {
        return $this->dropoffLocation;
    }
    public function jsonSerialize() : object
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('dropoffTime' => $this->dropoffTime, 'pickupTime' => $this->pickupTime, 'pickupLocation' => $this->pickupLocation, 'dropoffLocation' => $this->dropoffLocation), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

