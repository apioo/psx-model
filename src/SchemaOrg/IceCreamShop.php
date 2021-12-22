<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('An ice cream shop.')]
class IceCreamShop extends FoodEstablishment implements \JsonSerializable
{
}

