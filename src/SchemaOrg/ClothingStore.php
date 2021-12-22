<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A clothing store.')]
class ClothingStore extends Store implements \JsonSerializable
{
}

