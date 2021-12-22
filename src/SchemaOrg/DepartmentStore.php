<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A department store.')]
class DepartmentStore extends Store implements \JsonSerializable
{
}

