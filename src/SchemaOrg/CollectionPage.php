<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('Web page type: Collection page.')]
class CollectionPage extends WebPage implements \JsonSerializable
{
}

