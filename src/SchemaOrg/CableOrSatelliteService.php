<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A service which provides access to media programming like TV or radio. Access may be via cable or satellite.')]
class CableOrSatelliteService extends Service implements \JsonSerializable
{
}

