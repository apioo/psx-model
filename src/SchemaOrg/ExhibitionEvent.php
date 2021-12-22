<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('Event type: Exhibition event, e.g. at a museum, library, archive, tradeshow, ...')]
class ExhibitionEvent extends Event implements \JsonSerializable
{
}

