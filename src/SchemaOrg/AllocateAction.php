<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('The act of organizing tasks/objects/events by associating resources to it.')]
class AllocateAction extends OrganizeAction implements \JsonSerializable
{
}

