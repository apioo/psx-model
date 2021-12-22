<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('The act of consuming audio content.')]
class ListenAction extends ConsumeAction implements \JsonSerializable
{
}

