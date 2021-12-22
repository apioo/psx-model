<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A medical organization (physical or not), such as hospital, institution or clinic.')]
class MedicalOrganization extends Organization implements \JsonSerializable
{
}

