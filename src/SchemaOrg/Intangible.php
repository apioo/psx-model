<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A utility class that serves as the umbrella for a number of \'intangible\' things such as quantities, structured values, etc.')]
class Intangible extends Thing implements \JsonSerializable
{
}

