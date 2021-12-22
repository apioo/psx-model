<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('The act of deliberately creating/producing/generating/building a result out of the agent.')]
class CreateAction extends Action implements \JsonSerializable
{
}

