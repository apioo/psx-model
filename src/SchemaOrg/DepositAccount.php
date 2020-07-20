<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
 * @Description("A type of Bank Account with a main purpose of depositing funds to gain interest or other benefits.")
 */
class DepositAccount extends BankAccount implements \JsonSerializable
{
}
