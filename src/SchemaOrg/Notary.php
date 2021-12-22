<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A notary.')]
class Notary extends LegalService implements \JsonSerializable
{
}

