<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A short TV program or a segment/part of a TV program.')]
class TVClip extends Clip implements \JsonSerializable
{
}

