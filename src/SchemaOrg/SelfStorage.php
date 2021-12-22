<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A self-storage facility.')]
class SelfStorage extends LocalBusiness implements \JsonSerializable
{
}

