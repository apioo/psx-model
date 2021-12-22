<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('Event type: Social event.')]
class SocialEvent extends Event implements \JsonSerializable
{
}

