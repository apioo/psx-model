<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
 * @Description("An order is a confirmation of a transaction (a receipt), which can contain multiple line items, each represented by an Offer that has been accepted by the customer.")
 */
class Order extends Intangible
{
    /**
     * @var ParcelDelivery|null
     */
    protected $orderDelivery;
    /**
     * @var string|null
     */
    protected $discountCode;
    /**
     * @var Organization|Person|null
     */
    protected $seller;
    /**
     * @var string|null
     */
    protected $paymentMethodId;
    /**
     * @var Organization|Person|null
     */
    protected $broker;
    /**
     * @var \DateTime|\PSX\DateTime\Date|null
     */
    protected $paymentDueDate;
    /**
     * @var string|null
     */
    protected $confirmationNumber;
    /**
     * @var Offer|null
     */
    protected $acceptedOffer;
    /**
     * @var Organization|Person|null
     */
    protected $customer;
    /**
     * @var string|null
     */
    protected $discountCurrency;
    /**
     * @var \PSX\Uri\Uri|null
     */
    protected $paymentUrl;
    /**
     * @var string|null
     */
    protected $orderNumber;
    /**
     * @var bool|null
     */
    protected $isGift;
    /**
     * @var OrderStatus|null
     */
    protected $orderStatus;
    /**
     * @var string|float|null
     */
    protected $discount;
    /**
     * @var PaymentMethod|null
     */
    protected $paymentMethod;
    /**
     * @var Invoice|null
     */
    protected $partOfInvoice;
    /**
     * @var \DateTime|\PSX\DateTime\Date|null
     */
    protected $orderDate;
    /**
     * @var PostalAddress|null
     */
    protected $billingAddress;
    /**
     * @var Product|Service|OrderItem|null
     */
    protected $orderedItem;
    /**
     * @param ParcelDelivery|null $orderDelivery
     */
    public function setOrderDelivery(?ParcelDelivery $orderDelivery) : void
    {
        $this->orderDelivery = $orderDelivery;
    }
    /**
     * @return ParcelDelivery|null
     */
    public function getOrderDelivery() : ?ParcelDelivery
    {
        return $this->orderDelivery;
    }
    /**
     * @param string|null $discountCode
     */
    public function setDiscountCode(?string $discountCode) : void
    {
        $this->discountCode = $discountCode;
    }
    /**
     * @return string|null
     */
    public function getDiscountCode() : ?string
    {
        return $this->discountCode;
    }
    /**
     * @param Organization|Person|null $seller
     */
    public function setSeller($seller) : void
    {
        $this->seller = $seller;
    }
    /**
     * @return Organization|Person|null
     */
    public function getSeller()
    {
        return $this->seller;
    }
    /**
     * @param string|null $paymentMethodId
     */
    public function setPaymentMethodId(?string $paymentMethodId) : void
    {
        $this->paymentMethodId = $paymentMethodId;
    }
    /**
     * @return string|null
     */
    public function getPaymentMethodId() : ?string
    {
        return $this->paymentMethodId;
    }
    /**
     * @param Organization|Person|null $broker
     */
    public function setBroker($broker) : void
    {
        $this->broker = $broker;
    }
    /**
     * @return Organization|Person|null
     */
    public function getBroker()
    {
        return $this->broker;
    }
    /**
     * @param \DateTime|\PSX\DateTime\Date|null $paymentDueDate
     */
    public function setPaymentDueDate($paymentDueDate) : void
    {
        $this->paymentDueDate = $paymentDueDate;
    }
    /**
     * @return \DateTime|\PSX\DateTime\Date|null
     */
    public function getPaymentDueDate()
    {
        return $this->paymentDueDate;
    }
    /**
     * @param string|null $confirmationNumber
     */
    public function setConfirmationNumber(?string $confirmationNumber) : void
    {
        $this->confirmationNumber = $confirmationNumber;
    }
    /**
     * @return string|null
     */
    public function getConfirmationNumber() : ?string
    {
        return $this->confirmationNumber;
    }
    /**
     * @param Offer|null $acceptedOffer
     */
    public function setAcceptedOffer(?Offer $acceptedOffer) : void
    {
        $this->acceptedOffer = $acceptedOffer;
    }
    /**
     * @return Offer|null
     */
    public function getAcceptedOffer() : ?Offer
    {
        return $this->acceptedOffer;
    }
    /**
     * @param Organization|Person|null $customer
     */
    public function setCustomer($customer) : void
    {
        $this->customer = $customer;
    }
    /**
     * @return Organization|Person|null
     */
    public function getCustomer()
    {
        return $this->customer;
    }
    /**
     * @param string|null $discountCurrency
     */
    public function setDiscountCurrency(?string $discountCurrency) : void
    {
        $this->discountCurrency = $discountCurrency;
    }
    /**
     * @return string|null
     */
    public function getDiscountCurrency() : ?string
    {
        return $this->discountCurrency;
    }
    /**
     * @param \PSX\Uri\Uri|null $paymentUrl
     */
    public function setPaymentUrl(?\PSX\Uri\Uri $paymentUrl) : void
    {
        $this->paymentUrl = $paymentUrl;
    }
    /**
     * @return \PSX\Uri\Uri|null
     */
    public function getPaymentUrl() : ?\PSX\Uri\Uri
    {
        return $this->paymentUrl;
    }
    /**
     * @param string|null $orderNumber
     */
    public function setOrderNumber(?string $orderNumber) : void
    {
        $this->orderNumber = $orderNumber;
    }
    /**
     * @return string|null
     */
    public function getOrderNumber() : ?string
    {
        return $this->orderNumber;
    }
    /**
     * @param bool|null $isGift
     */
    public function setIsGift(?bool $isGift) : void
    {
        $this->isGift = $isGift;
    }
    /**
     * @return bool|null
     */
    public function getIsGift() : ?bool
    {
        return $this->isGift;
    }
    /**
     * @param OrderStatus|null $orderStatus
     */
    public function setOrderStatus(?OrderStatus $orderStatus) : void
    {
        $this->orderStatus = $orderStatus;
    }
    /**
     * @return OrderStatus|null
     */
    public function getOrderStatus() : ?OrderStatus
    {
        return $this->orderStatus;
    }
    /**
     * @param string|float|null $discount
     */
    public function setDiscount($discount) : void
    {
        $this->discount = $discount;
    }
    /**
     * @return string|float|null
     */
    public function getDiscount()
    {
        return $this->discount;
    }
    /**
     * @param PaymentMethod|null $paymentMethod
     */
    public function setPaymentMethod(?PaymentMethod $paymentMethod) : void
    {
        $this->paymentMethod = $paymentMethod;
    }
    /**
     * @return PaymentMethod|null
     */
    public function getPaymentMethod() : ?PaymentMethod
    {
        return $this->paymentMethod;
    }
    /**
     * @param Invoice|null $partOfInvoice
     */
    public function setPartOfInvoice(?Invoice $partOfInvoice) : void
    {
        $this->partOfInvoice = $partOfInvoice;
    }
    /**
     * @return Invoice|null
     */
    public function getPartOfInvoice() : ?Invoice
    {
        return $this->partOfInvoice;
    }
    /**
     * @param \DateTime|\PSX\DateTime\Date|null $orderDate
     */
    public function setOrderDate($orderDate) : void
    {
        $this->orderDate = $orderDate;
    }
    /**
     * @return \DateTime|\PSX\DateTime\Date|null
     */
    public function getOrderDate()
    {
        return $this->orderDate;
    }
    /**
     * @param PostalAddress|null $billingAddress
     */
    public function setBillingAddress(?PostalAddress $billingAddress) : void
    {
        $this->billingAddress = $billingAddress;
    }
    /**
     * @return PostalAddress|null
     */
    public function getBillingAddress() : ?PostalAddress
    {
        return $this->billingAddress;
    }
    /**
     * @param Product|Service|OrderItem|null $orderedItem
     */
    public function setOrderedItem($orderedItem) : void
    {
        $this->orderedItem = $orderedItem;
    }
    /**
     * @return Product|Service|OrderItem|null
     */
    public function getOrderedItem()
    {
        return $this->orderedItem;
    }
}
