<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('The act of interacting with another person or organization.')]
class InteractAction extends Action implements \JsonSerializable
{
}

