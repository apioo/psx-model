<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A business that provide Heating, Ventilation and Air Conditioning services.')]
class HVACBusiness extends HomeAndConstructionBusiness implements \JsonSerializable
{
}

