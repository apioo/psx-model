<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('Organization: Non-governmental Organization.')]
class NGO extends Organization implements \JsonSerializable
{
}

