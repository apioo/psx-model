<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A television station.')]
class TelevisionStation extends LocalBusiness implements \JsonSerializable
{
}

