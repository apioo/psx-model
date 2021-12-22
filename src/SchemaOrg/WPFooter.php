<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('The footer section of the page.')]
class WPFooter extends WebPageElement implements \JsonSerializable
{
}

