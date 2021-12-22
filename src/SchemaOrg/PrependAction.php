<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('The act of inserting at the beginning if an ordered collection.')]
class PrependAction extends InsertAction implements \JsonSerializable
{
}

