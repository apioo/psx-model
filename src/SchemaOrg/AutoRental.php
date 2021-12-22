<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A car rental business.')]
class AutoRental extends AutomotiveBusiness implements \JsonSerializable
{
}

