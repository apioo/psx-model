<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('An elementary school.')]
class ElementarySchool extends EducationalOrganization implements \JsonSerializable
{
}

