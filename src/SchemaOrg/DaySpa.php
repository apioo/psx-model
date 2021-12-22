<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A day spa.')]
class DaySpa extends HealthAndBeautyBusiness implements \JsonSerializable
{
}

