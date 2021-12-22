<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A high school.')]
class HighSchool extends EducationalOrganization implements \JsonSerializable
{
}

