<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('The act of momentarily pausing a device or application (e.g. pause music playback or pause a timer).')]
class SuspendAction extends ControlAction implements \JsonSerializable
{
}

