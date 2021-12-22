<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A home goods store.')]
class HomeGoodsStore extends Store implements \JsonSerializable
{
}

