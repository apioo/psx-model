<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A movie rental store.')]
class MovieRentalStore extends Store implements \JsonSerializable
{
}

