<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A painting.')]
class Painting extends CreativeWork implements \JsonSerializable
{
}

