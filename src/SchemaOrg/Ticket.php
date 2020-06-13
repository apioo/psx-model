<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
 * @Description("Used to describe a ticket to an event, a flight, a bus ride, etc.")
 */
class Ticket extends Intangible
{
    /**
     * @var string|null
     */
    protected $priceCurrency;
    /**
     * @var Organization|Person|null
     */
    protected $underName;
    /**
     * @var float|string|PriceSpecification|null
     */
    protected $totalPrice;
    /**
     * @var Organization|null
     */
    protected $issuedBy;
    /**
     * @var Seat|null
     */
    protected $ticketedSeat;
    /**
     * @var \PSX\DateTime\Date|\DateTime|null
     */
    protected $dateIssued;
    /**
     * @var \PSX\Uri\Uri|string|null
     */
    protected $ticketToken;
    /**
     * @var string|null
     */
    protected $ticketNumber;
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
     * @param Organization|null $issuedBy
     */
    public function setIssuedBy(?Organization $issuedBy) : void
    {
        $this->issuedBy = $issuedBy;
    }
    /**
     * @return Organization|null
     */
    public function getIssuedBy() : ?Organization
    {
        return $this->issuedBy;
    }
    /**
     * @param Seat|null $ticketedSeat
     */
    public function setTicketedSeat(?Seat $ticketedSeat) : void
    {
        $this->ticketedSeat = $ticketedSeat;
    }
    /**
     * @return Seat|null
     */
    public function getTicketedSeat() : ?Seat
    {
        return $this->ticketedSeat;
    }
    /**
     * @param \PSX\DateTime\Date|\DateTime|null $dateIssued
     */
    public function setDateIssued($dateIssued) : void
    {
        $this->dateIssued = $dateIssued;
    }
    /**
     * @return \PSX\DateTime\Date|\DateTime|null
     */
    public function getDateIssued()
    {
        return $this->dateIssued;
    }
    /**
     * @param \PSX\Uri\Uri|string|null $ticketToken
     */
    public function setTicketToken($ticketToken) : void
    {
        $this->ticketToken = $ticketToken;
    }
    /**
     * @return \PSX\Uri\Uri|string|null
     */
    public function getTicketToken()
    {
        return $this->ticketToken;
    }
    /**
     * @param string|null $ticketNumber
     */
    public function setTicketNumber(?string $ticketNumber) : void
    {
        $this->ticketNumber = $ticketNumber;
    }
    /**
     * @return string|null
     */
    public function getTicketNumber() : ?string
    {
        return $this->ticketNumber;
    }
}
