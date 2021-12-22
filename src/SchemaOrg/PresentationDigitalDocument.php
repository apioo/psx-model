<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A file containing slides or used for a presentation.')]
class PresentationDigitalDocument extends DigitalDocument implements \JsonSerializable
{
}

