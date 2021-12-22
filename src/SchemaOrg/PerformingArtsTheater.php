<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A theater or other performing art center.')]
class PerformingArtsTheater extends CivicStructure implements \JsonSerializable
{
}

