<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A volcano, like Fuji san.')]
class Volcano extends Landform implements \JsonSerializable
{
}

