<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A police station.')]
class PoliceStation extends EmergencyService implements \JsonSerializable
{
}

