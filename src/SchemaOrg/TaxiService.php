<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A service for a vehicle for hire with a driver for local travel. Fares are usually calculated based on distance traveled.')]
class TaxiService extends Service implements \JsonSerializable
{
}

