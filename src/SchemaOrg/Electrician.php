<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('An electrician.')]
class Electrician extends HomeAndConstructionBusiness implements \JsonSerializable
{
}

