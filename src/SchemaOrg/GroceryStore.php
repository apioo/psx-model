<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A grocery store.')]
class GroceryStore extends Store implements \JsonSerializable
{
}

