<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A theater group or company, for example, the Royal Shakespeare Company or Druid Theatre.')]
class TheaterGroup extends PerformingGroup implements \JsonSerializable
{
}

