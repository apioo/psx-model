<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('The act of marrying a person.')]
class MarryAction extends InteractAction implements \JsonSerializable
{
}

