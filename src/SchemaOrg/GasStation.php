<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A gas station.')]
class GasStation extends AutomotiveBusiness implements \JsonSerializable
{
}

