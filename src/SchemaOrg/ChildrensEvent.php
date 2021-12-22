<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('Event type: Children\'s event.')]
class ChildrensEvent extends Event implements \JsonSerializable
{
}

