<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('An adult entertainment establishment.')]
class AdultEntertainment extends EntertainmentBusiness implements \JsonSerializable
{
}

