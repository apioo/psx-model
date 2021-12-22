<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A parking lot or other parking facility.')]
class ParkingFacility extends CivicStructure implements \JsonSerializable
{
}

