<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A DeliveryMethod in which an item is made available via locker.')]
class LockerDelivery extends DeliveryMethod implements \JsonSerializable
{
}

