<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('An electronics store.')]
class ElectronicsStore extends Store implements \JsonSerializable
{
}

