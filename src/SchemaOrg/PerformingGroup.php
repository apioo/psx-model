<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A performance group, such as a band, an orchestra, or a circus.')]
class PerformingGroup extends Organization implements \JsonSerializable
{
}

