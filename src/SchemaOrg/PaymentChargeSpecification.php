<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('The costs of settling the payment using a particular payment method.')]
class PaymentChargeSpecification extends PriceSpecification implements \JsonSerializable
{
    protected ?PaymentMethod $appliesToPaymentMethod = null;
    protected ?DeliveryMethod $appliesToDeliveryMethod = null;
    public function setAppliesToPaymentMethod(?PaymentMethod $appliesToPaymentMethod) : void
    {
        $this->appliesToPaymentMethod = $appliesToPaymentMethod;
    }
    public function getAppliesToPaymentMethod() : ?PaymentMethod
    {
        return $this->appliesToPaymentMethod;
    }
    public function setAppliesToDeliveryMethod(?DeliveryMethod $appliesToDeliveryMethod) : void
    {
        $this->appliesToDeliveryMethod = $appliesToDeliveryMethod;
    }
    public function getAppliesToDeliveryMethod() : ?DeliveryMethod
    {
        return $this->appliesToDeliveryMethod;
    }
    public function jsonSerialize()
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('appliesToPaymentMethod' => $this->appliesToPaymentMethod, 'appliesToDeliveryMethod' => $this->appliesToDeliveryMethod), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

