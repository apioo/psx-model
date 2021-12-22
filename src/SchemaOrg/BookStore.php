<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A bookstore.')]
class BookStore extends Store implements \JsonSerializable
{
}

