<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
 * @Description("A group of multiple reservations with common values for all sub-reservations.")
 */
class ReservationPackage extends Reservation implements \JsonSerializable
{
    /**
     * @var Reservation|null
     */
    protected $subReservation;
    /**
     * @param Reservation|null $subReservation
     */
    public function setSubReservation(?Reservation $subReservation) : void
    {
        $this->subReservation = $subReservation;
    }
    /**
     * @return Reservation|null
     */
    public function getSubReservation() : ?Reservation
    {
        return $this->subReservation;
    }
    public function jsonSerialize()
    {
        return (object) array_filter(array('subReservation' => $this->subReservation), static function ($value) : bool {
            return $value !== null;
        });
    }
}
