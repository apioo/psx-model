<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A series of books. Included books can be indicated with the hasPart property.')]
class BookSeries extends CreativeWorkSeries implements \JsonSerializable
{
}

