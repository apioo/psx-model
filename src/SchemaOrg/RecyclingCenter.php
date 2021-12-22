<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A recycling center.')]
class RecyclingCenter extends LocalBusiness implements \JsonSerializable
{
}

