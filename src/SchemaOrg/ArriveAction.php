<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('The act of arriving at a place. An agent arrives at a destination from a fromLocation, optionally with participants.')]
class ArriveAction extends MoveAction implements \JsonSerializable
{
}

