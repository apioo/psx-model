<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('The act of resuming a device or application which was formerly paused (e.g. resume music playback or resume a timer).')]
class ResumeAction extends ControlAction implements \JsonSerializable
{
}

