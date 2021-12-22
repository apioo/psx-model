<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A specific payment status. For example, PaymentDue, PaymentComplete, etc.')]
class PaymentStatusType extends Enumeration implements \JsonSerializable
{
}

