<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('An ocean (for example, the Pacific).')]
class OceanBodyOfWater extends BodyOfWater implements \JsonSerializable
{
}

