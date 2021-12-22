<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A type of bed. This is used for indicating the bed or beds available in an accommodation.')]
class BedType extends QualitativeValue implements \JsonSerializable
{
}

