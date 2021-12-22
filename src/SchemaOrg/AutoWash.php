<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A car wash business.')]
class AutoWash extends AutomotiveBusiness implements \JsonSerializable
{
}

