<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('Event type: Visual arts event.')]
class VisualArtsEvent extends Event implements \JsonSerializable
{
}

