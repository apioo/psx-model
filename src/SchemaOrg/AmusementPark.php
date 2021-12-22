<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('An amusement park.')]
class AmusementPark extends EntertainmentBusiness implements \JsonSerializable
{
}

