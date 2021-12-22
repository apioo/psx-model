<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A bridge.')]
class Bridge extends CivicStructure implements \JsonSerializable
{
}

