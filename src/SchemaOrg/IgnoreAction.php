<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('The act of intentionally disregarding the object. An agent ignores an object.')]
class IgnoreAction extends AssessAction implements \JsonSerializable
{
}

