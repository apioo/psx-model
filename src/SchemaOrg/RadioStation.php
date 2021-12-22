<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A radio station.')]
class RadioStation extends LocalBusiness implements \JsonSerializable
{
}

