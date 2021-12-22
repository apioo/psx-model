<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A navigation element of the page.')]
class SiteNavigationElement extends WebPageElement implements \JsonSerializable
{
}

