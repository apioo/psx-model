<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A stadium.')]
class StadiumOrArena extends SportsActivityLocation implements \JsonSerializable
{
}

