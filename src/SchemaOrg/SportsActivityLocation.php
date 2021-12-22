<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A sports location, such as a playing field.')]
class SportsActivityLocation extends LocalBusiness implements \JsonSerializable
{
}

