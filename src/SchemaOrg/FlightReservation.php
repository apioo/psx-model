<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
* @Description("A reservation for air travel.<br/><br/>

Note: This type is for information about actual reservations, e.g. in confirmation emails or HTML pages with individual confirmations of reservations. For offers of tickets, use <a class=""localLink"" href=""http://schema.org/Offer"">Offer</a>.")
*/
class FlightReservation extends Reservation implements \JsonSerializable
{
    /**
     * @var string|null
     */
    protected $boardingGroup;
    /**
     * @var string|null
     */
    protected $passengerSequenceNumber;
    /**
     * @var string|null
     */
    protected $securityScreening;
    /**
     * @var string|QualitativeValue|null
     */
    protected $passengerPriorityStatus;
    /**
     * @param string|null $boardingGroup
     */
    public function setBoardingGroup(?string $boardingGroup) : void
    {
        $this->boardingGroup = $boardingGroup;
    }
    /**
     * @return string|null
     */
    public function getBoardingGroup() : ?string
    {
        return $this->boardingGroup;
    }
    /**
     * @param string|null $passengerSequenceNumber
     */
    public function setPassengerSequenceNumber(?string $passengerSequenceNumber) : void
    {
        $this->passengerSequenceNumber = $passengerSequenceNumber;
    }
    /**
     * @return string|null
     */
    public function getPassengerSequenceNumber() : ?string
    {
        return $this->passengerSequenceNumber;
    }
    /**
     * @param string|null $securityScreening
     */
    public function setSecurityScreening(?string $securityScreening) : void
    {
        $this->securityScreening = $securityScreening;
    }
    /**
     * @return string|null
     */
    public function getSecurityScreening() : ?string
    {
        return $this->securityScreening;
    }
    /**
     * @param string|QualitativeValue|null $passengerPriorityStatus
     */
    public function setPassengerPriorityStatus($passengerPriorityStatus) : void
    {
        $this->passengerPriorityStatus = $passengerPriorityStatus;
    }
    /**
     * @return string|QualitativeValue|null
     */
    public function getPassengerPriorityStatus()
    {
        return $this->passengerPriorityStatus;
    }
    public function jsonSerialize()
    {
        return array_merge(parent::jsonSerialize(), array_filter(array('boardingGroup' => $this->boardingGroup, 'passengerSequenceNumber' => $this->passengerSequenceNumber, 'securityScreening' => $this->securityScreening, 'passengerPriorityStatus' => $this->passengerPriorityStatus), static function ($value) : bool {
            return $value !== null;
        }));
    }
}
