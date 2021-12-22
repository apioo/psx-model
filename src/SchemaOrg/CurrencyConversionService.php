<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A service to convert funds from one currency to another currency.')]
class CurrencyConversionService extends FinancialProduct implements \JsonSerializable
{
}

