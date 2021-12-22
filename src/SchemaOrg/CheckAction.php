<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('An agent inspects, determines, investigates, inquires, or examines an object\'s accuracy, quality, condition, or state.')]
class CheckAction extends FindAction implements \JsonSerializable
{
}

