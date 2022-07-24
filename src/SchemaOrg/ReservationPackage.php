<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A group of multiple reservations with common values for all sub-reservations.')]
class ReservationPackage extends Reservation implements \JsonSerializable
{
    protected ?Reservation $subReservation = null;
    public function setSubReservation(?Reservation $subReservation) : void
    {
        $this->subReservation = $subReservation;
    }
    public function getSubReservation() : ?Reservation
    {
        return $this->subReservation;
    }
    public function jsonSerialize() : object
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('subReservation' => $this->subReservation), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

