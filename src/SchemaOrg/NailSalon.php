<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A nail salon.')]
class NailSalon extends HealthAndBeautyBusiness implements \JsonSerializable
{
}

