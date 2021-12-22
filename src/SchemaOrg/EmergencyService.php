<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('An emergency service, such as a fire station or ER.')]
class EmergencyService extends LocalBusiness implements \JsonSerializable
{
}

