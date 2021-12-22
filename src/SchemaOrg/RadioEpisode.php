<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A radio episode which can be part of a series or season.')]
class RadioEpisode extends Episode implements \JsonSerializable
{
}

