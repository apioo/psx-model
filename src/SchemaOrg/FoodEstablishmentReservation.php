<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A reservation to dine at a food-related business.<br/><br/>

Note: This type is for information about actual reservations, e.g. in confirmation emails or HTML pages with individual confirmations of reservations.')]
class FoodEstablishmentReservation extends Reservation implements \JsonSerializable
{
    protected \PSX\DateTime\Time|\DateTime|null $startTime = null;
    protected \PSX\DateTime\Time|\DateTime|null $endTime = null;
    protected int|QuantitativeValue|null $partySize = null;
    public function setStartTime(\PSX\DateTime\Time|\DateTime|null $startTime) : void
    {
        $this->startTime = $startTime;
    }
    public function getStartTime() : \PSX\DateTime\Time|\DateTime|null
    {
        return $this->startTime;
    }
    public function setEndTime(\PSX\DateTime\Time|\DateTime|null $endTime) : void
    {
        $this->endTime = $endTime;
    }
    public function getEndTime() : \PSX\DateTime\Time|\DateTime|null
    {
        return $this->endTime;
    }
    public function setPartySize(int|QuantitativeValue|null $partySize) : void
    {
        $this->partySize = $partySize;
    }
    public function getPartySize() : int|QuantitativeValue|null
    {
        return $this->partySize;
    }
    public function jsonSerialize()
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('startTime' => $this->startTime, 'endTime' => $this->endTime, 'partySize' => $this->partySize), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

