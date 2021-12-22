<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('Car repair, sales, or parts.')]
class AutomotiveBusiness extends LocalBusiness implements \JsonSerializable
{
}

