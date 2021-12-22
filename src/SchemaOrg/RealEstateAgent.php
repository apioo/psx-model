<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A real-estate agent.')]
class RealEstateAgent extends LocalBusiness implements \JsonSerializable
{
}

