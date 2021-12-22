<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('The place where a person lives.')]
class Residence extends Place implements \JsonSerializable
{
}

