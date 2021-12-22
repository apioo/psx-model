<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A sports club.')]
class SportsClub extends SportsActivityLocation implements \JsonSerializable
{
}

