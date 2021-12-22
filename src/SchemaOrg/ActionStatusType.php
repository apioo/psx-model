<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('The status of an Action.')]
class ActionStatusType extends Enumeration implements \JsonSerializable
{
}

