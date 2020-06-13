<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
 * @Description("An agent orders an object/product/service to be delivered/sent.")
 */
class OrderAction extends TradeAction
{
    /**
     * @var Thing|DeliveryMethod|null
     */
    protected $deliveryMethod;
    /**
     * @param Thing|DeliveryMethod|null $deliveryMethod
     */
    public function setDeliveryMethod($deliveryMethod) : void
    {
        $this->deliveryMethod = $deliveryMethod;
    }
    /**
     * @return Thing|DeliveryMethod|null
     */
    public function getDeliveryMethod()
    {
        return $this->deliveryMethod;
    }
}
