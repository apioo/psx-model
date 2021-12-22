<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A house painting service.')]
class HousePainter extends HomeAndConstructionBusiness implements \JsonSerializable
{
}

