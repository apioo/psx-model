<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A canal, like the Panama Canal.')]
class Canal extends BodyOfWater implements \JsonSerializable
{
}

