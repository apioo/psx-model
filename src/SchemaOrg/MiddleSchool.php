<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A middle school (typically for children aged around 11-14, although this varies somewhat).')]
class MiddleSchool extends EducationalOrganization implements \JsonSerializable
{
}

