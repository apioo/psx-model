<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('The act of capturing sound and moving images on film, video, or digitally.')]
class FilmAction extends CreateAction implements \JsonSerializable
{
}

