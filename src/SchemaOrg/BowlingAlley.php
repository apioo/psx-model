<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A bowling alley.')]
class BowlingAlley extends SportsActivityLocation implements \JsonSerializable
{
}

