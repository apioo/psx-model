<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('The act of swallowing solid objects.')]
class EatAction extends ConsumeAction implements \JsonSerializable
{
}

