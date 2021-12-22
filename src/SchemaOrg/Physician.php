<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A doctor\'s office.')]
class Physician extends MedicalOrganization implements \JsonSerializable
{
}

