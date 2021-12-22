<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A type of boarding policy used by an airline.')]
class BoardingPolicyType extends Enumeration implements \JsonSerializable
{
}

