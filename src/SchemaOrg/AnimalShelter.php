<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('Animal shelter.')]
class AnimalShelter extends LocalBusiness implements \JsonSerializable
{
}

