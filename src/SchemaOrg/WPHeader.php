<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('The header section of the page.')]
class WPHeader extends WebPageElement implements \JsonSerializable
{
}

