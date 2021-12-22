<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('An advertising section of the page.')]
class WPAdBlock extends WebPageElement implements \JsonSerializable
{
}

