<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A store that sells materials useful or necessary for various hobbies.')]
class HobbyShop extends Store implements \JsonSerializable
{
}

