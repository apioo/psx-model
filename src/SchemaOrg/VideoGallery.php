<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('Web page type: Video gallery page.')]
class VideoGallery extends MediaGallery implements \JsonSerializable
{
}

