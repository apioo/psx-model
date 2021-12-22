<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A radio channel that uses FM.')]
class FMRadioChannel extends RadioChannel implements \JsonSerializable
{
}

