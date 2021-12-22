<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('An enumeration of several kinds of Map.')]
class MapCategoryType extends Enumeration implements \JsonSerializable
{
}

