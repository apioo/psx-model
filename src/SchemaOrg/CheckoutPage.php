<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('Web page type: Checkout page.')]
class CheckoutPage extends WebPage implements \JsonSerializable
{
}

