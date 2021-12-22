<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('Web page type: Profile page.')]
class ProfilePage extends WebPage implements \JsonSerializable
{
}

