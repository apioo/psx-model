<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A government building.')]
class GovernmentBuilding extends CivicStructure implements \JsonSerializable
{
}

