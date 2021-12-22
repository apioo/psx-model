<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('Structured values are used when the value of a property has a more complex structure than simply being a textual value or a reference to another thing.')]
class StructuredValue extends Intangible implements \JsonSerializable
{
}

