<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A shopping center or mall.')]
class ShoppingCenter extends LocalBusiness implements \JsonSerializable
{
}

