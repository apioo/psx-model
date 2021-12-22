<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('An answer offered to a question; perhaps correct, perhaps opinionated or wrong.')]
class Answer extends Comment implements \JsonSerializable
{
}

