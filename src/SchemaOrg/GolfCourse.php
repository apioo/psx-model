<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A golf course.')]
class GolfCourse extends SportsActivityLocation implements \JsonSerializable
{
}

