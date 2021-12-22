<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A waterfall, like Niagara.')]
class Waterfall extends BodyOfWater implements \JsonSerializable
{
}

