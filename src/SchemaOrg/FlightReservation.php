<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A reservation for air travel.<br/><br/>

Note: This type is for information about actual reservations, e.g. in confirmation emails or HTML pages with individual confirmations of reservations. For offers of tickets, use <a class="localLink" href="http://schema.org/Offer">Offer</a>.')]
class FlightReservation extends Reservation implements \JsonSerializable
{
    protected ?string $boardingGroup = null;
    protected ?string $passengerSequenceNumber = null;
    protected ?string $securityScreening = null;
    protected string|QualitativeValue|null $passengerPriorityStatus = null;
    public function setBoardingGroup(?string $boardingGroup) : void
    {
        $this->boardingGroup = $boardingGroup;
    }
    public function getBoardingGroup() : ?string
    {
        return $this->boardingGroup;
    }
    public function setPassengerSequenceNumber(?string $passengerSequenceNumber) : void
    {
        $this->passengerSequenceNumber = $passengerSequenceNumber;
    }
    public function getPassengerSequenceNumber() : ?string
    {
        return $this->passengerSequenceNumber;
    }
    public function setSecurityScreening(?string $securityScreening) : void
    {
        $this->securityScreening = $securityScreening;
    }
    public function getSecurityScreening() : ?string
    {
        return $this->securityScreening;
    }
    public function setPassengerPriorityStatus(string|QualitativeValue|null $passengerPriorityStatus) : void
    {
        $this->passengerPriorityStatus = $passengerPriorityStatus;
    }
    public function getPassengerPriorityStatus() : string|QualitativeValue|null
    {
        return $this->passengerPriorityStatus;
    }
    public function jsonSerialize() : object
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('boardingGroup' => $this->boardingGroup, 'passengerSequenceNumber' => $this->passengerSequenceNumber, 'securityScreening' => $this->securityScreening, 'passengerPriorityStatus' => $this->passengerPriorityStatus), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

