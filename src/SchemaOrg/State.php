<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A state or province of a country.')]
class State extends AdministrativeArea implements \JsonSerializable
{
}

