<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A moving company.')]
class MovingCompany extends HomeAndConstructionBusiness implements \JsonSerializable
{
}

