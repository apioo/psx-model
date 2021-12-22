<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('Place of worship, such as a church, synagogue, or mosque.')]
class PlaceOfWorship extends CivicStructure implements \JsonSerializable
{
}

