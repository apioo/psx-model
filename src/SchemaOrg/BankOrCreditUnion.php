<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('Bank or credit union.')]
class BankOrCreditUnion extends FinancialService implements \JsonSerializable
{
}

