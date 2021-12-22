<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A motorcycle dealer.')]
class MotorcycleDealer extends AutomotiveBusiness implements \JsonSerializable
{
}

