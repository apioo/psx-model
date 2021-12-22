<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('An email message.')]
class EmailMessage extends Message implements \JsonSerializable
{
}

