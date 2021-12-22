<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A product or service offered by a bank whereby one may deposit, withdraw or transfer money and in some cases be paid interest.')]
class BankAccount extends FinancialProduct implements \JsonSerializable
{
}

