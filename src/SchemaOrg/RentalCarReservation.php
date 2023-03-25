<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A reservation for a rental car.<br/><br/>

Note: This type is for information about actual reservations, e.g. in confirmation emails or HTML pages with individual confirmations of reservations.')]
class RentalCarReservation extends Reservation implements \JsonSerializable
{
    protected ?\PSX\DateTime\LocalDateTime $dropoffTime = null;
    protected ?\PSX\DateTime\LocalDateTime $pickupTime = null;
    protected ?Place $pickupLocation = null;
    protected ?Place $dropoffLocation = null;
    public function setDropoffTime(?\PSX\DateTime\LocalDateTime $dropoffTime) : void
    {
        $this->dropoffTime = $dropoffTime;
    }
    public function getDropoffTime() : ?\PSX\DateTime\LocalDateTime
    {
        return $this->dropoffTime;
    }
    public function setPickupTime(?\PSX\DateTime\LocalDateTime $pickupTime) : void
    {
        $this->pickupTime = $pickupTime;
    }
    public function getPickupTime() : ?\PSX\DateTime\LocalDateTime
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

