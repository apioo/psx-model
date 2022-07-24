<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('An agent orders an object/product/service to be delivered/sent.')]
class OrderAction extends TradeAction implements \JsonSerializable
{
    protected Thing|DeliveryMethod|null $deliveryMethod = null;
    public function setDeliveryMethod(Thing|DeliveryMethod|null $deliveryMethod) : void
    {
        $this->deliveryMethod = $deliveryMethod;
    }
    public function getDeliveryMethod() : Thing|DeliveryMethod|null
    {
        return $this->deliveryMethod;
    }
    public function jsonSerialize() : object
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('deliveryMethod' => $this->deliveryMethod), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

