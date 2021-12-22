<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A plumbing service.')]
class Plumber extends HomeAndConstructionBusiness implements \JsonSerializable
{
}

