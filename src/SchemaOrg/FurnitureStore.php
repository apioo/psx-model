<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A furniture store.')]
class FurnitureStore extends Store implements \JsonSerializable
{
}

