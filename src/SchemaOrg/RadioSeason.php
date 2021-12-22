<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('Season dedicated to radio broadcast and associated online delivery.')]
class RadioSeason extends CreativeWorkSeason implements \JsonSerializable
{
}

