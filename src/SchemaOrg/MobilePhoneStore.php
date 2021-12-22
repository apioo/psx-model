<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A store that sells mobile phones and related accessories.')]
class MobilePhoneStore extends Store implements \JsonSerializable
{
}

