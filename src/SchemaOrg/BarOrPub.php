<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A bar or pub.')]
class BarOrPub extends FoodEstablishment implements \JsonSerializable
{
}

