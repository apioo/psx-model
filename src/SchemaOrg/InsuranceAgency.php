<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('An Insurance agency.')]
class InsuranceAgency extends FinancialService implements \JsonSerializable
{
}

