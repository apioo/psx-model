<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A spreadsheet file.')]
class SpreadsheetDigitalDocument extends DigitalDocument implements \JsonSerializable
{
}

