<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('Beauty salon.')]
class BeautySalon extends HealthAndBeautyBusiness implements \JsonSerializable
{
}

