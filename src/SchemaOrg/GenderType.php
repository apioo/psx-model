<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('An enumeration of genders.')]
class GenderType extends Enumeration implements \JsonSerializable
{
}

