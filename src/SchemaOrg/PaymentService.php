<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A Service to transfer funds from a person or organization to a beneficiary person or organization.')]
class PaymentService extends FinancialProduct implements \JsonSerializable
{
}

