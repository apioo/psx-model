<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A preschool.')]
class Preschool extends EducationalOrganization implements \JsonSerializable
{
}

