<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A place offering space for "Recreational Vehicles", Caravans, mobile homes and the like.')]
class RVPark extends CivicStructure implements \JsonSerializable
{
}

