<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A reservoir of water, typically an artificially created lake, like the Lake Kariba reservoir.')]
class Reservoir extends BodyOfWater implements \JsonSerializable
{
}

