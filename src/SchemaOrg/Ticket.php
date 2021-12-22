<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('Used to describe a ticket to an event, a flight, a bus ride, etc.')]
class Ticket extends Intangible implements \JsonSerializable
{
    protected ?string $priceCurrency = null;
    protected Organization|Person|null $underName = null;
    protected float|string|PriceSpecification|null $totalPrice = null;
    protected ?Organization $issuedBy = null;
    protected ?Seat $ticketedSeat = null;
    protected \PSX\DateTime\Date|\DateTime|null $dateIssued = null;
    protected \PSX\Uri\Uri|string|null $ticketToken = null;
    protected ?string $ticketNumber = null;
    public function setPriceCurrency(?string $priceCurrency) : void
    {
        $this->priceCurrency = $priceCurrency;
    }
    public function getPriceCurrency() : ?string
    {
        return $this->priceCurrency;
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
    public function setIssuedBy(?Organization $issuedBy) : void
    {
        $this->issuedBy = $issuedBy;
    }
    public function getIssuedBy() : ?Organization
    {
        return $this->issuedBy;
    }
    public function setTicketedSeat(?Seat $ticketedSeat) : void
    {
        $this->ticketedSeat = $ticketedSeat;
    }
    public function getTicketedSeat() : ?Seat
    {
        return $this->ticketedSeat;
    }
    public function setDateIssued(\PSX\DateTime\Date|\DateTime|null $dateIssued) : void
    {
        $this->dateIssued = $dateIssued;
    }
    public function getDateIssued() : \PSX\DateTime\Date|\DateTime|null
    {
        return $this->dateIssued;
    }
    public function setTicketToken(\PSX\Uri\Uri|string|null $ticketToken) : void
    {
        $this->ticketToken = $ticketToken;
    }
    public function getTicketToken() : \PSX\Uri\Uri|string|null
    {
        return $this->ticketToken;
    }
    public function setTicketNumber(?string $ticketNumber) : void
    {
        $this->ticketNumber = $ticketNumber;
    }
    public function getTicketNumber() : ?string
    {
        return $this->ticketNumber;
    }
    public function jsonSerialize()
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('priceCurrency' => $this->priceCurrency, 'underName' => $this->underName, 'totalPrice' => $this->totalPrice, 'issuedBy' => $this->issuedBy, 'ticketedSeat' => $this->ticketedSeat, 'dateIssued' => $this->dateIssued, 'ticketToken' => $this->ticketToken, 'ticketNumber' => $this->ticketNumber), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

