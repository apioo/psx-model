<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('An aggregate rating of an Organization related to its role as an employer.')]
class EmployerAggregateRating extends AggregateRating implements \JsonSerializable
{
}

