<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('The act of dressing oneself in clothing.')]
class WearAction extends UseAction implements \JsonSerializable
{
}

