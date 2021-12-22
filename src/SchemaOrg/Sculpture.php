<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A piece of sculpture.')]
class Sculpture extends CreativeWork implements \JsonSerializable
{
}

