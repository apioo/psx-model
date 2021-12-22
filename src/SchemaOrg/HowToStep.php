<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A step in the instructions for how to achieve a result. It is an ordered list with HowToDirection and/or HowToTip items.')]
class HowToStep extends CreativeWork implements \JsonSerializable
{
}

