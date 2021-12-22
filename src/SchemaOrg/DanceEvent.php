<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('Event type: A social dance.')]
class DanceEvent extends Event implements \JsonSerializable
{
}

