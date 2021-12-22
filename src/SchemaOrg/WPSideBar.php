<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A sidebar section of the page.')]
class WPSideBar extends WebPageElement implements \JsonSerializable
{
}

