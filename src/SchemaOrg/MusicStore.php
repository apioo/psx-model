<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A music store.')]
class MusicStore extends Store implements \JsonSerializable
{
}

