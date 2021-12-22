<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A body of water, such as a sea, ocean, or lake.')]
class BodyOfWater extends Landform implements \JsonSerializable
{
}

