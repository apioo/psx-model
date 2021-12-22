<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A unique instance of a radio BroadcastService on a CableOrSatelliteService lineup.')]
class RadioChannel extends BroadcastChannel implements \JsonSerializable
{
}

