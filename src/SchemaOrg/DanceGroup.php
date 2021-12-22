<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A dance group&#x2014;for example, the Alvin Ailey Dance Theater or Riverdance.')]
class DanceGroup extends PerformingGroup implements \JsonSerializable
{
}

