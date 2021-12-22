<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('Event type: Theater performance.')]
class TheaterEvent extends Event implements \JsonSerializable
{
}

