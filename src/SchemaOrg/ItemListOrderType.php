<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('Enumerated for values for itemListOrder for indicating how an ordered ItemList is organized.')]
class ItemListOrderType extends Enumeration implements \JsonSerializable
{
}

