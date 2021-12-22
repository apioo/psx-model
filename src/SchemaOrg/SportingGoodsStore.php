<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A sporting goods store.')]
class SportingGoodsStore extends Store implements \JsonSerializable
{
}

