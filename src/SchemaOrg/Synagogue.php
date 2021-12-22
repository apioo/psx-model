<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A synagogue.')]
class Synagogue extends PlaceOfWorship implements \JsonSerializable
{
}

