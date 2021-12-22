<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('The act of accomplishing something via previous efforts. It is an instantaneous action rather than an ongoing process.')]
class AchieveAction extends Action implements \JsonSerializable
{
}

