<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('The act of expressing a desire about the object. An agent wants an object.')]
class WantAction extends ReactAction implements \JsonSerializable
{
}

