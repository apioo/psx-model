<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A Hindu temple.')]
class HinduTemple extends PlaceOfWorship implements \JsonSerializable
{
}

