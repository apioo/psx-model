<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
 * @Description("The costs of settling the payment using a particular payment method.")
 */
class PaymentChargeSpecification extends PriceSpecification implements \JsonSerializable
{
    /**
     * @var PaymentMethod|null
     */
    protected $appliesToPaymentMethod;
    /**
     * @var DeliveryMethod|null
     */
    protected $appliesToDeliveryMethod;
    /**
     * @param PaymentMethod|null $appliesToPaymentMethod
     */
    public function setAppliesToPaymentMethod(?PaymentMethod $appliesToPaymentMethod) : void
    {
        $this->appliesToPaymentMethod = $appliesToPaymentMethod;
    }
    /**
     * @return PaymentMethod|null
     */
    public function getAppliesToPaymentMethod() : ?PaymentMethod
    {
        return $this->appliesToPaymentMethod;
    }
    /**
     * @param DeliveryMethod|null $appliesToDeliveryMethod
     */
    public function setAppliesToDeliveryMethod(?DeliveryMethod $appliesToDeliveryMethod) : void
    {
        $this->appliesToDeliveryMethod = $appliesToDeliveryMethod;
    }
    /**
     * @return DeliveryMethod|null
     */
    public function getAppliesToDeliveryMethod() : ?DeliveryMethod
    {
        return $this->appliesToDeliveryMethod;
    }
    public function jsonSerialize()
    {
        return (object) array_filter(array('appliesToPaymentMethod' => $this->appliesToPaymentMethod, 'appliesToDeliveryMethod' => $this->appliesToDeliveryMethod), static function ($value) : bool {
            return $value !== null;
        });
    }
}
