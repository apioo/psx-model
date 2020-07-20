<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
* @Description("A reservation for a rental car.<br/><br/>

Note: This type is for information about actual reservations, e.g. in confirmation emails or HTML pages with individual confirmations of reservations.")
*/
class RentalCarReservation extends Reservation implements \JsonSerializable
{
    /**
     * @var \DateTime|null
     */
    protected $dropoffTime;
    /**
     * @var \DateTime|null
     */
    protected $pickupTime;
    /**
     * @var Place|null
     */
    protected $pickupLocation;
    /**
     * @var Place|null
     */
    protected $dropoffLocation;
    /**
     * @param \DateTime|null $dropoffTime
     */
    public function setDropoffTime(?\DateTime $dropoffTime) : void
    {
        $this->dropoffTime = $dropoffTime;
    }
    /**
     * @return \DateTime|null
     */
    public function getDropoffTime() : ?\DateTime
    {
        return $this->dropoffTime;
    }
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
    /**
     * @param Place|null $dropoffLocation
     */
    public function setDropoffLocation(?Place $dropoffLocation) : void
    {
        $this->dropoffLocation = $dropoffLocation;
    }
    /**
     * @return Place|null
     */
    public function getDropoffLocation() : ?Place
    {
        return $this->dropoffLocation;
    }
    public function jsonSerialize()
    {
        return (object) array_filter(array('dropoffTime' => $this->dropoffTime, 'pickupTime' => $this->pickupTime, 'pickupLocation' => $this->pickupLocation, 'dropoffLocation' => $this->dropoffLocation), static function ($value) : bool {
            return $value !== null;
        });
    }
}
