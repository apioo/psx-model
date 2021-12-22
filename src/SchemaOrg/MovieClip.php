<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A short segment/part of a movie.')]
class MovieClip extends Clip implements \JsonSerializable
{
}

