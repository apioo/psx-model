<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A college, university, or other third-level educational institution.')]
class CollegeOrUniversity extends EducationalOrganization implements \JsonSerializable
{
}

