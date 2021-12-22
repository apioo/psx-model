<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A table on a Web page.')]
class Table extends WebPageElement implements \JsonSerializable
{
}

