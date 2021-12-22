<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A train station.')]
class TrainStation extends CivicStructure implements \JsonSerializable
{
}

