<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('The act of allocating an action/event/task to some destination (someone or something).')]
class AssignAction extends AllocateAction implements \JsonSerializable
{
}

