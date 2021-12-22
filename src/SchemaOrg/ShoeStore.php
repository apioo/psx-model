<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A shoe store.')]
class ShoeStore extends Store implements \JsonSerializable
{
}

