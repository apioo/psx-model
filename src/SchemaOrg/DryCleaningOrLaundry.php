<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A dry-cleaning business.')]
class DryCleaningOrLaundry extends LocalBusiness implements \JsonSerializable
{
}

