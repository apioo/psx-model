<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A men\'s clothing store.')]
class MensClothingStore extends Store implements \JsonSerializable
{
}

