<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
* @Description("A reservation to dine at a food-related business.<br/><br/>

Note: This type is for information about actual reservations, e.g. in confirmation emails or HTML pages with individual confirmations of reservations.")
*/
class FoodEstablishmentReservation extends Reservation
{
    /**
     * @var \PSX\DateTime\Time|\DateTime|null
     */
    protected $startTime;
    /**
     * @var \PSX\DateTime\Time|\DateTime|null
     */
    protected $endTime;
    /**
     * @var int|QuantitativeValue|null
     */
    protected $partySize;
    /**
     * @param \PSX\DateTime\Time|\DateTime|null $startTime
     */
    public function setStartTime($startTime) : void
    {
        $this->startTime = $startTime;
    }
    /**
     * @return \PSX\DateTime\Time|\DateTime|null
     */
    public function getStartTime()
    {
        return $this->startTime;
    }
    /**
     * @param \PSX\DateTime\Time|\DateTime|null $endTime
     */
    public function setEndTime($endTime) : void
    {
        $this->endTime = $endTime;
    }
    /**
     * @return \PSX\DateTime\Time|\DateTime|null
     */
    public function getEndTime()
    {
        return $this->endTime;
    }
    /**
     * @param int|QuantitativeValue|null $partySize
     */
    public function setPartySize($partySize) : void
    {
        $this->partySize = $partySize;
    }
    /**
     * @return int|QuantitativeValue|null
     */
    public function getPartySize()
    {
        return $this->partySize;
    }
}
