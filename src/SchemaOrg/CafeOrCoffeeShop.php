<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A cafe or coffee shop.')]
class CafeOrCoffeeShop extends FoodEstablishment implements \JsonSerializable
{
}

