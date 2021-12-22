<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('An car dealership.')]
class AutoDealer extends AutomotiveBusiness implements \JsonSerializable
{
}

