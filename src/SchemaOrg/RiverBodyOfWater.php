<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A river (for example, the broad majestic Shannon).')]
class RiverBodyOfWater extends BodyOfWater implements \JsonSerializable
{
}

