<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('Classification of the album by it\'s type of content: soundtrack, live album, studio album, etc.')]
class MusicAlbumProductionType extends Enumeration implements \JsonSerializable
{
}

