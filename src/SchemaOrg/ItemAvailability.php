<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A list of possible product availability options.')]
class ItemAvailability extends Enumeration implements \JsonSerializable
{
}

