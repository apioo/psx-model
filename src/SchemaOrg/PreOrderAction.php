<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('An agent orders a (not yet released) object/product/service to be delivered/sent.')]
class PreOrderAction extends TradeAction implements \JsonSerializable
{
}

