<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A casino.')]
class Casino extends EntertainmentBusiness implements \JsonSerializable
{
}

