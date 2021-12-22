<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A business providing entertainment.')]
class EntertainmentBusiness extends LocalBusiness implements \JsonSerializable
{
}

