<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('The act of responding instinctively and emotionally to an object, expressing a sentiment.')]
class ReactAction extends AssessAction implements \JsonSerializable
{
}

