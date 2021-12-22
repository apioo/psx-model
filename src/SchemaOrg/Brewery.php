<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('Brewery.')]
class Brewery extends FoodEstablishment implements \JsonSerializable
{
}

