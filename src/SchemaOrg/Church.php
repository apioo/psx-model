<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A church.')]
class Church extends PlaceOfWorship implements \JsonSerializable
{
}

