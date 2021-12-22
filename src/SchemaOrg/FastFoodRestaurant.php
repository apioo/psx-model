<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A fast-food restaurant.')]
class FastFoodRestaurant extends FoodEstablishment implements \JsonSerializable
{
}

