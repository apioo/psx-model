<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A jewelry store.')]
class JewelryStore extends Store implements \JsonSerializable
{
}

