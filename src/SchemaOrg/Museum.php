<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A museum.')]
class Museum extends CivicStructure implements \JsonSerializable
{
}

