<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('The kind of release which this album is: single, EP or album.')]
class MusicAlbumReleaseType extends Enumeration implements \JsonSerializable
{
}

