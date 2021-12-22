<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A Buddhist temple.')]
class BuddhistTemple extends PlaceOfWorship implements \JsonSerializable
{
}

