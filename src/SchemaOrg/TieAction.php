<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('The act of reaching a draw in a competitive activity.')]
class TieAction extends AchieveAction implements \JsonSerializable
{
}

