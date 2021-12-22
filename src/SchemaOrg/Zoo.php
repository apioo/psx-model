<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A zoo.')]
class Zoo extends CivicStructure implements \JsonSerializable
{
}

