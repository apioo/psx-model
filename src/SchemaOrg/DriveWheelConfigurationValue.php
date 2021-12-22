<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A value indicating which roadwheels will receive torque.')]
class DriveWheelConfigurationValue extends QualitativeValue implements \JsonSerializable
{
}

