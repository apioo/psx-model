<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A file containing a note, primarily for the author.')]
class NoteDigitalDocument extends DigitalDocument implements \JsonSerializable
{
}

