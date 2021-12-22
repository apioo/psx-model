<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('The act of swallowing liquids.')]
class DrinkAction extends ConsumeAction implements \JsonSerializable
{
}

