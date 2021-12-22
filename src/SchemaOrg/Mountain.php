<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A mountain, like Mount Whitney or Mount Everest.')]
class Mountain extends Landform implements \JsonSerializable
{
}

