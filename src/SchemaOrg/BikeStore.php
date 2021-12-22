<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A bike store.')]
class BikeStore extends Store implements \JsonSerializable
{
}

