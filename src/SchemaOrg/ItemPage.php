<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A page devoted to a single item, such as a particular product or hotel.')]
class ItemPage extends WebPage implements \JsonSerializable
{
}

