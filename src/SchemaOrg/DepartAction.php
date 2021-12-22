<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('The act of  departing from a place. An agent departs from an fromLocation for a destination, optionally with participants.')]
class DepartAction extends MoveAction implements \JsonSerializable
{
}

