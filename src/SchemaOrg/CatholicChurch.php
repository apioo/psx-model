<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A Catholic church.')]
class CatholicChurch extends Church implements \JsonSerializable
{
}

