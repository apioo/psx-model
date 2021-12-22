<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('Event type: Literary event.')]
class LiteraryEvent extends Event implements \JsonSerializable
{
}

