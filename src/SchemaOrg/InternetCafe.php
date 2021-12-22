<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('An internet cafe.')]
class InternetCafe extends LocalBusiness implements \JsonSerializable
{
}

