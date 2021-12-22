<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A nightclub or discotheque.')]
class NightClub extends EntertainmentBusiness implements \JsonSerializable
{
}

