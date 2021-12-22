<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('Event type: Food event.')]
class FoodEvent extends Event implements \JsonSerializable
{
}

