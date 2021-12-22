<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('Auto body shop.')]
class AutoBodyShop extends AutomotiveBusiness implements \JsonSerializable
{
}

