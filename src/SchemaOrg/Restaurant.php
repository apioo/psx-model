<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A restaurant.')]
class Restaurant extends FoodEstablishment implements \JsonSerializable
{
}

