<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A ski resort.')]
class SkiResort extends SportsActivityLocation implements \JsonSerializable
{
}

