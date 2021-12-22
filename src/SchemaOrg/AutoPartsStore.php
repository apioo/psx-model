<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('An auto parts store.')]
class AutoPartsStore extends AutomotiveBusiness implements \JsonSerializable
{
}

