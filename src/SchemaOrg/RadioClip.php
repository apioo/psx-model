<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A short radio program or a segment/part of a radio program.')]
class RadioClip extends Clip implements \JsonSerializable
{
}

