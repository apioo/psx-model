<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('An historical landmark or building.')]
class LandmarksOrHistoricalBuildings extends Place implements \JsonSerializable
{
}

