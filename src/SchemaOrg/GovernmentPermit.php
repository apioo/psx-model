<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A permit issued by a government agency.')]
class GovernmentPermit extends Permit implements \JsonSerializable
{
}

