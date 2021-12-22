<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('Used to describe a seat, such as a reserved seat in an event reservation.')]
class Seat extends Intangible implements \JsonSerializable
{
    protected string|QualitativeValue|null $seatingType = null;
    protected ?string $seatRow = null;
    protected ?string $seatSection = null;
    protected ?string $seatNumber = null;
    public function setSeatingType(string|QualitativeValue|null $seatingType) : void
    {
        $this->seatingType = $seatingType;
    }
    public function getSeatingType() : string|QualitativeValue|null
    {
        return $this->seatingType;
    }
    public function setSeatRow(?string $seatRow) : void
    {
        $this->seatRow = $seatRow;
    }
    public function getSeatRow() : ?string
    {
        return $this->seatRow;
    }
    public function setSeatSection(?string $seatSection) : void
    {
        $this->seatSection = $seatSection;
    }
    public function getSeatSection() : ?string
    {
        return $this->seatSection;
    }
    public function setSeatNumber(?string $seatNumber) : void
    {
        $this->seatNumber = $seatNumber;
    }
    public function getSeatNumber() : ?string
    {
        return $this->seatNumber;
    }
    public function jsonSerialize()
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('seatingType' => $this->seatingType, 'seatRow' => $this->seatRow, 'seatSection' => $this->seatSection, 'seatNumber' => $this->seatNumber), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

