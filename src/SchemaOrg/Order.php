<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('An order is a confirmation of a transaction (a receipt), which can contain multiple line items, each represented by an Offer that has been accepted by the customer.')]
class Order extends Intangible implements \JsonSerializable
{
    protected ?ParcelDelivery $orderDelivery = null;
    protected ?string $discountCode = null;
    protected Organization|Person|null $seller = null;
    protected ?string $paymentMethodId = null;
    protected Organization|Person|null $broker = null;
    protected \DateTime|\PSX\DateTime\Date|null $paymentDueDate = null;
    protected ?string $confirmationNumber = null;
    protected ?Offer $acceptedOffer = null;
    protected Organization|Person|null $customer = null;
    protected ?string $discountCurrency = null;
    protected ?\PSX\Uri\Uri $paymentUrl = null;
    protected ?string $orderNumber = null;
    protected ?bool $isGift = null;
    protected ?OrderStatus $orderStatus = null;
    protected string|float|null $discount = null;
    protected ?PaymentMethod $paymentMethod = null;
    protected ?Invoice $partOfInvoice = null;
    protected \DateTime|\PSX\DateTime\Date|null $orderDate = null;
    protected ?PostalAddress $billingAddress = null;
    protected Product|Service|OrderItem|null $orderedItem = null;
    public function setOrderDelivery(?ParcelDelivery $orderDelivery) : void
    {
        $this->orderDelivery = $orderDelivery;
    }
    public function getOrderDelivery() : ?ParcelDelivery
    {
        return $this->orderDelivery;
    }
    public function setDiscountCode(?string $discountCode) : void
    {
        $this->discountCode = $discountCode;
    }
    public function getDiscountCode() : ?string
    {
        return $this->discountCode;
    }
    public function setSeller(Organization|Person|null $seller) : void
    {
        $this->seller = $seller;
    }
    public function getSeller() : Organization|Person|null
    {
        return $this->seller;
    }
    public function setPaymentMethodId(?string $paymentMethodId) : void
    {
        $this->paymentMethodId = $paymentMethodId;
    }
    public function getPaymentMethodId() : ?string
    {
        return $this->paymentMethodId;
    }
    public function setBroker(Organization|Person|null $broker) : void
    {
        $this->broker = $broker;
    }
    public function getBroker() : Organization|Person|null
    {
        return $this->broker;
    }
    public function setPaymentDueDate(\DateTime|\PSX\DateTime\Date|null $paymentDueDate) : void
    {
        $this->paymentDueDate = $paymentDueDate;
    }
    public function getPaymentDueDate() : \DateTime|\PSX\DateTime\Date|null
    {
        return $this->paymentDueDate;
    }
    public function setConfirmationNumber(?string $confirmationNumber) : void
    {
        $this->confirmationNumber = $confirmationNumber;
    }
    public function getConfirmationNumber() : ?string
    {
        return $this->confirmationNumber;
    }
    public function setAcceptedOffer(?Offer $acceptedOffer) : void
    {
        $this->acceptedOffer = $acceptedOffer;
    }
    public function getAcceptedOffer() : ?Offer
    {
        return $this->acceptedOffer;
    }
    public function setCustomer(Organization|Person|null $customer) : void
    {
        $this->customer = $customer;
    }
    public function getCustomer() : Organization|Person|null
    {
        return $this->customer;
    }
    public function setDiscountCurrency(?string $discountCurrency) : void
    {
        $this->discountCurrency = $discountCurrency;
    }
    public function getDiscountCurrency() : ?string
    {
        return $this->discountCurrency;
    }
    public function setPaymentUrl(?\PSX\Uri\Uri $paymentUrl) : void
    {
        $this->paymentUrl = $paymentUrl;
    }
    public function getPaymentUrl() : ?\PSX\Uri\Uri
    {
        return $this->paymentUrl;
    }
    public function setOrderNumber(?string $orderNumber) : void
    {
        $this->orderNumber = $orderNumber;
    }
    public function getOrderNumber() : ?string
    {
        return $this->orderNumber;
    }
    public function setIsGift(?bool $isGift) : void
    {
        $this->isGift = $isGift;
    }
    public function getIsGift() : ?bool
    {
        return $this->isGift;
    }
    public function setOrderStatus(?OrderStatus $orderStatus) : void
    {
        $this->orderStatus = $orderStatus;
    }
    public function getOrderStatus() : ?OrderStatus
    {
        return $this->orderStatus;
    }
    public function setDiscount(string|float|null $discount) : void
    {
        $this->discount = $discount;
    }
    public function getDiscount() : string|float|null
    {
        return $this->discount;
    }
    public function setPaymentMethod(?PaymentMethod $paymentMethod) : void
    {
        $this->paymentMethod = $paymentMethod;
    }
    public function getPaymentMethod() : ?PaymentMethod
    {
        return $this->paymentMethod;
    }
    public function setPartOfInvoice(?Invoice $partOfInvoice) : void
    {
        $this->partOfInvoice = $partOfInvoice;
    }
    public function getPartOfInvoice() : ?Invoice
    {
        return $this->partOfInvoice;
    }
    public function setOrderDate(\DateTime|\PSX\DateTime\Date|null $orderDate) : void
    {
        $this->orderDate = $orderDate;
    }
    public function getOrderDate() : \DateTime|\PSX\DateTime\Date|null
    {
        return $this->orderDate;
    }
    public function setBillingAddress(?PostalAddress $billingAddress) : void
    {
        $this->billingAddress = $billingAddress;
    }
    public function getBillingAddress() : ?PostalAddress
    {
        return $this->billingAddress;
    }
    public function setOrderedItem(Product|Service|OrderItem|null $orderedItem) : void
    {
        $this->orderedItem = $orderedItem;
    }
    public function getOrderedItem() : Product|Service|OrderItem|null
    {
        return $this->orderedItem;
    }
    public function jsonSerialize()
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('orderDelivery' => $this->orderDelivery, 'discountCode' => $this->discountCode, 'seller' => $this->seller, 'paymentMethodId' => $this->paymentMethodId, 'broker' => $this->broker, 'paymentDueDate' => $this->paymentDueDate, 'confirmationNumber' => $this->confirmationNumber, 'acceptedOffer' => $this->acceptedOffer, 'customer' => $this->customer, 'discountCurrency' => $this->discountCurrency, 'paymentUrl' => $this->paymentUrl, 'orderNumber' => $this->orderNumber, 'isGift' => $this->isGift, 'orderStatus' => $this->orderStatus, 'discount' => $this->discount, 'paymentMethod' => $this->paymentMethod, 'partOfInvoice' => $this->partOfInvoice, 'orderDate' => $this->orderDate, 'billingAddress' => $this->billingAddress, 'orderedItem' => $this->orderedItem), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

