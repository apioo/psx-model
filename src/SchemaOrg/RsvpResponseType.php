<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('RsvpResponseType is an enumeration type whose instances represent responding to an RSVP request.')]
class RsvpResponseType extends Enumeration implements \JsonSerializable
{
}

