<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A legislative building&#x2014;for example, the state capitol.')]
class LegislativeBuilding extends GovernmentBuilding implements \JsonSerializable
{
}

