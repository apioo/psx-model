<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('Status of a game server.')]
class GameServerStatus extends Enumeration implements \JsonSerializable
{
}

