<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A health club.')]
class HealthClub extends HealthAndBeautyBusiness implements \JsonSerializable
{
}

