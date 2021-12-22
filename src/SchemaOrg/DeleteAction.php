<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('The act of editing a recipient by removing one of its objects.')]
class DeleteAction extends UpdateAction implements \JsonSerializable
{
}

