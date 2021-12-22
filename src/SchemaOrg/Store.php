<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A retail good store.')]
class Store extends LocalBusiness implements \JsonSerializable
{
}

