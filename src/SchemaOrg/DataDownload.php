<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A dataset in downloadable form.')]
class DataDownload extends MediaObject implements \JsonSerializable
{
}

