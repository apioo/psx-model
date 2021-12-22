<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('The act of downloading an object.')]
class DownloadAction extends TransferAction implements \JsonSerializable
{
}

