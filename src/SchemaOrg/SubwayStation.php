<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A subway station.')]
class SubwayStation extends CivicStructure implements \JsonSerializable
{
}

