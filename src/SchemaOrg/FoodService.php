<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A food service, like breakfast, lunch, or dinner.')]
class FoodService extends Service implements \JsonSerializable
{
}

