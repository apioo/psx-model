<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A tattoo parlor.')]
class TattooParlor extends HealthAndBeautyBusiness implements \JsonSerializable
{
}

