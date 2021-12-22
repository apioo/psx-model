<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('Computer programming source code. Example: Full (compile ready) solutions, code snippet samples, scripts, templates.')]
class Code extends CreativeWork implements \JsonSerializable
{
}

