<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A music venue.')]
class MusicVenue extends CivicStructure implements \JsonSerializable
{
}

