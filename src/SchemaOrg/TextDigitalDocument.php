<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A file composed primarily of text.')]
class TextDigitalDocument extends DigitalDocument implements \JsonSerializable
{
}

