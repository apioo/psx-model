<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('Event type: Comedy event.')]
class ComedyEvent extends Event implements \JsonSerializable
{
}

