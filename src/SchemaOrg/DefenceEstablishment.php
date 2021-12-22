<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A defence establishment, such as an army or navy base.')]
class DefenceEstablishment extends GovernmentBuilding implements \JsonSerializable
{
}

