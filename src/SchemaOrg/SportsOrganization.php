<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('Represents the collection of all sports organizations, including sports teams, governing bodies, and sports associations.')]
class SportsOrganization extends Organization implements \JsonSerializable
{
}

