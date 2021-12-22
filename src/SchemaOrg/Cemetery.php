<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A graveyard.')]
class Cemetery extends CivicStructure implements \JsonSerializable
{
}

