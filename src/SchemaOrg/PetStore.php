<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A pet store.')]
class PetStore extends Store implements \JsonSerializable
{
}

