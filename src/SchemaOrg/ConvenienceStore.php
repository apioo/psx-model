<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A convenience store.')]
class ConvenienceStore extends Store implements \JsonSerializable
{
}

