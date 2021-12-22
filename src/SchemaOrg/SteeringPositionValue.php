<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A value indicating a steering position.')]
class SteeringPositionValue extends QualitativeValue implements \JsonSerializable
{
}

