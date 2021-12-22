<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A shop that sells alcoholic drinks such as wine, beer, whisky and other spirits.')]
class LiquorStore extends Store implements \JsonSerializable
{
}

