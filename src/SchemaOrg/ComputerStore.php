<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A computer store.')]
class ComputerStore extends Store implements \JsonSerializable
{
}

