<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A post office.')]
class PostOffice extends GovernmentOffice implements \JsonSerializable
{
}

