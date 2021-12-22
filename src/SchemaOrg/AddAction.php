<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('The act of editing by adding an object to a collection.')]
class AddAction extends UpdateAction implements \JsonSerializable
{
}

