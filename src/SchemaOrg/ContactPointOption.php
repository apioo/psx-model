<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('Enumerated options related to a ContactPoint.')]
class ContactPointOption extends Enumeration implements \JsonSerializable
{
}

