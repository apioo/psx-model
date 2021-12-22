<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A tool used (but not consumed) when performing instructions for how to achieve a result.')]
class HowToTool extends HowToItem implements \JsonSerializable
{
}

