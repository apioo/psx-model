<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A taxi stand.')]
class TaxiStand extends CivicStructure implements \JsonSerializable
{
}

