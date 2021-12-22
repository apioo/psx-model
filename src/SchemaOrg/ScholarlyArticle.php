<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A scholarly article.')]
class ScholarlyArticle extends Article implements \JsonSerializable
{
}

