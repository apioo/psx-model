<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('An agent quotes/estimates/appraises an object/product/service with a price at a location/store.')]
class QuoteAction extends TradeAction implements \JsonSerializable
{
}

