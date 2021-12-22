<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A media season e.g. tv, radio, video game etc.')]
class Season extends CreativeWork implements \JsonSerializable
{
}

