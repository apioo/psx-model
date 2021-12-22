<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A hardware store.')]
class HardwareStore extends Store implements \JsonSerializable
{
}

