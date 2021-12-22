<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A courthouse.')]
class Courthouse extends GovernmentBuilding implements \JsonSerializable
{
}

