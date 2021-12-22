<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('The act of inserting at the end if an ordered collection.')]
class AppendAction extends InsertAction implements \JsonSerializable
{
}

