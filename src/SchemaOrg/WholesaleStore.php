<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A wholesale store.')]
class WholesaleStore extends Store implements \JsonSerializable
{
}

