<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('Enumerated status values for Reservation.')]
class ReservationStatusType extends Enumeration implements \JsonSerializable
{
}

