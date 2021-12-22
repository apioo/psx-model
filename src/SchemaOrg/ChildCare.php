<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A Childcare center.')]
class ChildCare extends LocalBusiness implements \JsonSerializable
{
}

