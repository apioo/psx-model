<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A garden store.')]
class GardenStore extends Store implements \JsonSerializable
{
}

