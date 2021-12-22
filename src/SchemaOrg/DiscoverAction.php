<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('The act of discovering/finding an object.')]
class DiscoverAction extends FindAction implements \JsonSerializable
{
}

