<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('An employment agency.')]
class EmploymentAgency extends LocalBusiness implements \JsonSerializable
{
}

