<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A geographical region, typically under the jurisdiction of a particular government.')]
class AdministrativeArea extends Place implements \JsonSerializable
{
}

