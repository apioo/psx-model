<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('Format of this release (the type of recording media used, ie. compact disc, digital media, LP, etc.).')]
class MusicReleaseFormatType extends Enumeration implements \JsonSerializable
{
}

