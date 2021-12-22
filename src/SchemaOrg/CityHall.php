<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A city hall.')]
class CityHall extends GovernmentBuilding implements \JsonSerializable
{
}

