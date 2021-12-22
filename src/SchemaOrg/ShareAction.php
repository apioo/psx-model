<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('The act of distributing content to people for their amusement or edification.')]
class ShareAction extends CommunicateAction implements \JsonSerializable
{
}

