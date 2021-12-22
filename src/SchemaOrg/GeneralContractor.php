<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A general contractor.')]
class GeneralContractor extends HomeAndConstructionBusiness implements \JsonSerializable
{
}

