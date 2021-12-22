<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('The act of stopping or deactivating a device or application (e.g. stopping a timer or turning off a flashlight).')]
class DeactivateAction extends ControlAction implements \JsonSerializable
{
}

