<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('The publication format of the book.')]
class BookFormatType extends Enumeration implements \JsonSerializable
{
}

