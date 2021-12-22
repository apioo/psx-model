<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A car is a wheeled, self-powered motor vehicle used for transportation.')]
class Car extends Vehicle implements \JsonSerializable
{
}

