<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('The act of consuming dynamic/moving visual content.')]
class WatchAction extends ConsumeAction implements \JsonSerializable
{
}

