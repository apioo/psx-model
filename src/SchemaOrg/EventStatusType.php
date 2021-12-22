<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('EventStatusType is an enumeration type whose instances represent several states that an Event may be in.')]
class EventStatusType extends Enumeration implements \JsonSerializable
{
}

