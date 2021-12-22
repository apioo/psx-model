<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A toy store.')]
class ToyStore extends Store implements \JsonSerializable
{
}

