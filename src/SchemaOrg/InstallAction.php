<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('The act of installing an application.')]
class InstallAction extends ConsumeAction implements \JsonSerializable
{
}

