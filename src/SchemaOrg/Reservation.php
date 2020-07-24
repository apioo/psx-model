<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
* @Description("Describes a reservation for travel, dining or an event. Some reservations require tickets. <br/><br/>

Note: This type is for information about actual reservations, e.g. in confirmation emails or HTML pages with individual confirmations of reservations. For offers of tickets, restaurant reservations, flights, or rental cars, use <a class=""localLink"" href=""http://schema.org/Offer"">Offer</a>.")
*/
class Reservation extends Intangible implements \JsonSerializable
{
    /**
     * @var Thing|null
     */
    protected $reservationFor;
    /**
     * @var Organization|Person|null
     */
    protected $provider;
    /**
     * @var string|null
     */
    protected $priceCurrency;
    /**
     * @var string|null
     */
    protected $reservationId;
    /**
     * @var Organization|Person|null
     */
    protected $broker;
    /**
     * @var Organization|Person|null
     */
    protected $underName;
    /**
     * @var float|string|PriceSpecification|null
     */
    protected $totalPrice;
    /**
     * @var \DateTime|null
     */
    protected $modifiedTime;
    /**
     * @var ReservationStatusType|null
     */
    protected $reservationStatus;
    /**
     * @var \DateTime|null
     */
    protected $bookingTime;
    /**
     * @var Ticket|null
     */
    protected $reservedTicket;
    /**
     * @var ProgramMembership|null
     */
    protected $programMembershipUsed;
    /**
     * @param Thing|null $reservationFor
     */
    public function setReservationFor(?Thing $reservationFor) : void
    {
        $this->reservationFor = $reservationFor;
    }
    /**
     * @return Thing|null
     */
    public function getReservationFor() : ?Thing
    {
        return $this->reservationFor;
    }
    /**
     * @param Organization|Person|null $provider
     */
    public function setProvider($provider) : void
    {
        $this->provider = $provider;
    }
    /**
     * @return Organization|Person|null
     */
    public function getProvider()
    {
        return $this->provider;
    }
    /**
     * @param string|null $priceCurrency
     */
    public function setPriceCurrency(?string $priceCurrency) : void
    {
        $this->priceCurrency = $priceCurrency;
    }
    /**
     * @return string|null
     */
    public function getPriceCurrency() : ?string
    {
        return $this->priceCurrency;
    }
    /**
     * @param string|null $reservationId
     */
    public function setReservationId(?string $reservationId) : void
    {
        $this->reservationId = $reservationId;
    }
    /**
     * @return string|null
     */
    public function getReservationId() : ?string
    {
        return $this->reservationId;
    }
    /**
     * @param Organization|Person|null $broker
     */
    public function setBroker($broker) : void
    {
        $this->broker = $broker;
    }
    /**
     * @return Organization|Person|null
     */
    public function getBroker()
    {
        return $this->broker;
    }
    /**
     * @param Organization|Person|null $underName
     */
    public function setUnderName($underName) : void
    {
        $this->underName = $underName;
    }
    /**
     * @return Organization|Person|null
     */
    public function getUnderName()
    {
        return $this->underName;
    }
    /**
     * @param float|string|PriceSpecification|null $totalPrice
     */
    public function setTotalPrice($totalPrice) : void
    {
        $this->totalPrice = $totalPrice;
    }
    /**
     * @return float|string|PriceSpecification|null
     */
    public function getTotalPrice()
    {
        return $this->totalPrice;
    }
    /**
     * @param \DateTime|null $modifiedTime
     */
    public function setModifiedTime(?\DateTime $modifiedTime) : void
    {
        $this->modifiedTime = $modifiedTime;
    }
    /**
     * @return \DateTime|null
     */
    public function getModifiedTime() : ?\DateTime
    {
        return $this->modifiedTime;
    }
    /**
     * @param ReservationStatusType|null $reservationStatus
     */
    public function setReservationStatus(?ReservationStatusType $reservationStatus) : void
    {
        $this->reservationStatus = $reservationStatus;
    }
    /**
     * @return ReservationStatusType|null
     */
    public function getReservationStatus() : ?ReservationStatusType
    {
        return $this->reservationStatus;
    }
    /**
     * @param \DateTime|null $bookingTime
     */
    public function setBookingTime(?\DateTime $bookingTime) : void
    {
        $this->bookingTime = $bookingTime;
    }
    /**
     * @return \DateTime|null
     */
    public function getBookingTime() : ?\DateTime
    {
        return $this->bookingTime;
    }
    /**
     * @param Ticket|null $reservedTicket
     */
    public function setReservedTicket(?Ticket $reservedTicket) : void
    {
        $this->reservedTicket = $reservedTicket;
    }
    /**
     * @return Ticket|null
     */
    public function getReservedTicket() : ?Ticket
    {
        return $this->reservedTicket;
    }
    /**
     * @param ProgramMembership|null $programMembershipUsed
     */
    public function setProgramMembershipUsed(?ProgramMembership $programMembershipUsed) : void
    {
        $this->programMembershipUsed = $programMembershipUsed;
    }
    /**
     * @return ProgramMembership|null
     */
    public function getProgramMembershipUsed() : ?ProgramMembership
    {
        return $this->programMembershipUsed;
    }
    public function jsonSerialize()
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('reservationFor' => $this->reservationFor, 'provider' => $this->provider, 'priceCurrency' => $this->priceCurrency, 'reservationId' => $this->reservationId, 'broker' => $this->broker, 'underName' => $this->underName, 'totalPrice' => $this->totalPrice, 'modifiedTime' => $this->modifiedTime, 'reservationStatus' => $this->reservationStatus, 'bookingTime' => $this->bookingTime, 'reservedTicket' => $this->reservedTicket, 'programMembershipUsed' => $this->programMembershipUsed), static function ($value) : bool {
            return $value !== null;
        }));
    }
}
