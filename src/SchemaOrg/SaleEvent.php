<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('Event type: Sales event.')]
class SaleEvent extends Event implements \JsonSerializable
{
}

