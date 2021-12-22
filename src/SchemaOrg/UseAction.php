<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('The act of applying an object to its intended purpose.')]
class UseAction extends ConsumeAction implements \JsonSerializable
{
}

