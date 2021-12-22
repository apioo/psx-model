<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A diet restricted to certain foods or preparations for cultural, religious, health or lifestyle reasons.')]
class RestrictedDiet extends Enumeration implements \JsonSerializable
{
}

