<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
 * @Description("A group of multiple reservations with common values for all sub-reservations.")
 */
class ReservationPackage extends Reservation
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
}
