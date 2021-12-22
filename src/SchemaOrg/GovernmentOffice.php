<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A government office&#x2014;for example, an IRS or DMV office.')]
class GovernmentOffice extends LocalBusiness implements \JsonSerializable
{
}

