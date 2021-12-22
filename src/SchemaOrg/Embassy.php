<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('An embassy.')]
class Embassy extends GovernmentBuilding implements \JsonSerializable
{
}

