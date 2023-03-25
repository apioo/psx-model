<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('Describes a reservation for travel, dining or an event. Some reservations require tickets. <br/><br/>

Note: This type is for information about actual reservations, e.g. in confirmation emails or HTML pages with individual confirmations of reservations. For offers of tickets, restaurant reservations, flights, or rental cars, use <a class="localLink" href="http://schema.org/Offer">Offer</a>.')]
class Reservation extends Intangible implements \JsonSerializable
{
    protected ?Thing $reservationFor = null;
    protected Organization|Person|null $provider = null;
    protected ?string $priceCurrency = null;
    protected ?string $reservationId = null;
    protected Organization|Person|null $broker = null;
    protected Organization|Person|null $underName = null;
    protected float|string|PriceSpecification|null $totalPrice = null;
    protected ?\PSX\DateTime\LocalDateTime $modifiedTime = null;
    protected ?ReservationStatusType $reservationStatus = null;
    protected ?\PSX\DateTime\LocalDateTime $bookingTime = null;
    protected ?Ticket $reservedTicket = null;
    protected ?ProgramMembership $programMembershipUsed = null;
    public function setReservationFor(?Thing $reservationFor) : void
    {
        $this->reservationFor = $reservationFor;
    }
    public function getReservationFor() : ?Thing
    {
        return $this->reservationFor;
    }
    public function setProvider(Organization|Person|null $provider) : void
    {
        $this->provider = $provider;
    }
    public function getProvider() : Organization|Person|null
    {
        return $this->provider;
    }
    public function setPriceCurrency(?string $priceCurrency) : void
    {
        $this->priceCurrency = $priceCurrency;
    }
    public function getPriceCurrency() : ?string
    {
        return $this->priceCurrency;
    }
    public function setReservationId(?string $reservationId) : void
    {
        $this->reservationId = $reservationId;
    }
    public function getReservationId() : ?string
    {
        return $this->reservationId;
    }
    public function setBroker(Organization|Person|null $broker) : void
    {
        $this->broker = $broker;
    }
    public function getBroker() : Organization|Person|null
    {
        return $this->broker;
    }
    public function setUnderName(Organization|Person|null $underName) : void
    {
        $this->underName = $underName;
    }
    public function getUnderName() : Organization|Person|null
    {
        return $this->underName;
    }
    public function setTotalPrice(float|string|PriceSpecification|null $totalPrice) : void
    {
        $this->totalPrice = $totalPrice;
    }
    public function getTotalPrice() : float|string|PriceSpecification|null
    {
        return $this->totalPrice;
    }
    public function setModifiedTime(?\PSX\DateTime\LocalDateTime $modifiedTime) : void
    {
        $this->modifiedTime = $modifiedTime;
    }
    public function getModifiedTime() : ?\PSX\DateTime\LocalDateTime
    {
        return $this->modifiedTime;
    }
    public function setReservationStatus(?ReservationStatusType $reservationStatus) : void
    {
        $this->reservationStatus = $reservationStatus;
    }
    public function getReservationStatus() : ?ReservationStatusType
    {
        return $this->reservationStatus;
    }
    public function setBookingTime(?\PSX\DateTime\LocalDateTime $bookingTime) : void
    {
        $this->bookingTime = $bookingTime;
    }
    public function getBookingTime() : ?\PSX\DateTime\LocalDateTime
    {
        return $this->bookingTime;
    }
    public function setReservedTicket(?Ticket $reservedTicket) : void
    {
        $this->reservedTicket = $reservedTicket;
    }
    public function getReservedTicket() : ?Ticket
    {
        return $this->reservedTicket;
    }
    public function setProgramMembershipUsed(?ProgramMembership $programMembershipUsed) : void
    {
        $this->programMembershipUsed = $programMembershipUsed;
    }
    public function getProgramMembershipUsed() : ?ProgramMembership
    {
        return $this->programMembershipUsed;
    }
    public function jsonSerialize() : object
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('reservationFor' => $this->reservationFor, 'provider' => $this->provider, 'priceCurrency' => $this->priceCurrency, 'reservationId' => $this->reservationId, 'broker' => $this->broker, 'underName' => $this->underName, 'totalPrice' => $this->totalPrice, 'modifiedTime' => $this->modifiedTime, 'reservationStatus' => $this->reservationStatus, 'bookingTime' => $this->bookingTime, 'reservedTicket' => $this->reservedTicket, 'programMembershipUsed' => $this->programMembershipUsed), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

