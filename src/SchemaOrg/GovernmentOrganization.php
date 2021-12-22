<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A governmental organization or agency.')]
class GovernmentOrganization extends Organization implements \JsonSerializable
{
}

