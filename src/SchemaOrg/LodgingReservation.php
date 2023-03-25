<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A reservation for lodging at a hotel, motel, inn, etc.<br/><br/>

Note: This type is for information about actual reservations, e.g. in confirmation emails or HTML pages with individual confirmations of reservations.')]
class LodgingReservation extends Reservation implements \JsonSerializable
{
    protected int|QuantitativeValue|null $numAdults = null;
    protected string|QualitativeValue|null $lodgingUnitType = null;
    protected int|QuantitativeValue|null $numChildren = null;
    protected ?string $lodgingUnitDescription = null;
    protected \PSX\DateTime\LocalDateTime|\PSX\DateTime\LocalTime|null $checkoutTime = null;
    protected \PSX\DateTime\LocalDateTime|\PSX\DateTime\LocalTime|null $checkinTime = null;
    public function setNumAdults(int|QuantitativeValue|null $numAdults) : void
    {
        $this->numAdults = $numAdults;
    }
    public function getNumAdults() : int|QuantitativeValue|null
    {
        return $this->numAdults;
    }
    public function setLodgingUnitType(string|QualitativeValue|null $lodgingUnitType) : void
    {
        $this->lodgingUnitType = $lodgingUnitType;
    }
    public function getLodgingUnitType() : string|QualitativeValue|null
    {
        return $this->lodgingUnitType;
    }
    public function setNumChildren(int|QuantitativeValue|null $numChildren) : void
    {
        $this->numChildren = $numChildren;
    }
    public function getNumChildren() : int|QuantitativeValue|null
    {
        return $this->numChildren;
    }
    public function setLodgingUnitDescription(?string $lodgingUnitDescription) : void
    {
        $this->lodgingUnitDescription = $lodgingUnitDescription;
    }
    public function getLodgingUnitDescription() : ?string
    {
        return $this->lodgingUnitDescription;
    }
    public function setCheckoutTime(\PSX\DateTime\LocalDateTime|\PSX\DateTime\LocalTime|null $checkoutTime) : void
    {
        $this->checkoutTime = $checkoutTime;
    }
    public function getCheckoutTime() : \PSX\DateTime\LocalDateTime|\PSX\DateTime\LocalTime|null
    {
        return $this->checkoutTime;
    }
    public function setCheckinTime(\PSX\DateTime\LocalDateTime|\PSX\DateTime\LocalTime|null $checkinTime) : void
    {
        $this->checkinTime = $checkinTime;
    }
    public function getCheckinTime() : \PSX\DateTime\LocalDateTime|\PSX\DateTime\LocalTime|null
    {
        return $this->checkinTime;
    }
    public function jsonSerialize() : object
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('numAdults' => $this->numAdults, 'lodgingUnitType' => $this->lodgingUnitType, 'numChildren' => $this->numChildren, 'lodgingUnitDescription' => $this->lodgingUnitDescription, 'checkoutTime' => $this->checkoutTime, 'checkinTime' => $this->checkinTime), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

