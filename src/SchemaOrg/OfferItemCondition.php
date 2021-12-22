<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A list of possible conditions for the item.')]
class OfferItemCondition extends Enumeration implements \JsonSerializable
{
}

