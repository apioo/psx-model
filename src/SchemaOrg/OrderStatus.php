<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('Enumerated status values for Order.')]
class OrderStatus extends Enumeration implements \JsonSerializable
{
}

