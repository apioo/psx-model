<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A motorcycle repair shop.')]
class MotorcycleRepair extends AutomotiveBusiness implements \JsonSerializable
{
}

