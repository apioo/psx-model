<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A tire shop.')]
class TireShop extends Store implements \JsonSerializable
{
}

