<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('ATM/cash machine.')]
class AutomatedTeller extends FinancialService implements \JsonSerializable
{
}

