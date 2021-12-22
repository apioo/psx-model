<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A payment method using a credit, debit, store or other card to associate the payment with an account.')]
class PaymentCard extends FinancialProduct implements \JsonSerializable
{
}

