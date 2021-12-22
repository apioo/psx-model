<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('Lists or enumerations—for example, a list of cuisines or music genres, etc.')]
class Enumeration extends Intangible implements \JsonSerializable
{
}

