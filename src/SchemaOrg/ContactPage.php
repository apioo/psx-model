<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('Web page type: Contact page.')]
class ContactPage extends WebPage implements \JsonSerializable
{
}

