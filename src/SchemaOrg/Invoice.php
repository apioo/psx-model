<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A statement of the money due for goods or services; a bill.')]
class Invoice extends Intangible implements \JsonSerializable
{
    protected string|PaymentStatusType|null $paymentStatus = null;
    protected ?Duration $billingPeriod = null;
    protected ?\PSX\DateTime\Date $scheduledPaymentDate = null;
    protected \PSX\Uri\Uri|Thing|string|null $category = null;
    protected Organization|Person|null $provider = null;
    protected ?string $paymentMethodId = null;
    protected ?Order $referencesOrder = null;
    protected MonetaryAmount|PriceSpecification|null $minimumPaymentDue = null;
    protected PriceSpecification|MonetaryAmount|null $totalPaymentDue = null;
    protected Organization|Person|null $broker = null;
    protected \DateTime|\PSX\DateTime\Date|null $paymentDueDate = null;
    protected ?string $confirmationNumber = null;
    protected ?string $accountId = null;
    protected Organization|Person|null $customer = null;
    protected ?PaymentMethod $paymentMethod = null;
    public function setPaymentStatus(string|PaymentStatusType|null $paymentStatus) : void
    {
        $this->paymentStatus = $paymentStatus;
    }
    public function getPaymentStatus() : string|PaymentStatusType|null
    {
        return $this->paymentStatus;
    }
    public function setBillingPeriod(?Duration $billingPeriod) : void
    {
        $this->billingPeriod = $billingPeriod;
    }
    public function getBillingPeriod() : ?Duration
    {
        return $this->billingPeriod;
    }
    public function setScheduledPaymentDate(?\PSX\DateTime\Date $scheduledPaymentDate) : void
    {
        $this->scheduledPaymentDate = $scheduledPaymentDate;
    }
    public function getScheduledPaymentDate() : ?\PSX\DateTime\Date
    {
        return $this->scheduledPaymentDate;
    }
    public function setCategory(\PSX\Uri\Uri|Thing|string|null $category) : void
    {
        $this->category = $category;
    }
    public function getCategory() : \PSX\Uri\Uri|Thing|string|null
    {
        return $this->category;
    }
    public function setProvider(Organization|Person|null $provider) : void
    {
        $this->provider = $provider;
    }
    public function getProvider() : Organization|Person|null
    {
        return $this->provider;
    }
    public function setPaymentMethodId(?string $paymentMethodId) : void
    {
        $this->paymentMethodId = $paymentMethodId;
    }
    public function getPaymentMethodId() : ?string
    {
        return $this->paymentMethodId;
    }
    public function setReferencesOrder(?Order $referencesOrder) : void
    {
        $this->referencesOrder = $referencesOrder;
    }
    public function getReferencesOrder() : ?Order
    {
        return $this->referencesOrder;
    }
    public function setMinimumPaymentDue(MonetaryAmount|PriceSpecification|null $minimumPaymentDue) : void
    {
        $this->minimumPaymentDue = $minimumPaymentDue;
    }
    public function getMinimumPaymentDue() : MonetaryAmount|PriceSpecification|null
    {
        return $this->minimumPaymentDue;
    }
    public function setTotalPaymentDue(PriceSpecification|MonetaryAmount|null $totalPaymentDue) : void
    {
        $this->totalPaymentDue = $totalPaymentDue;
    }
    public function getTotalPaymentDue() : PriceSpecification|MonetaryAmount|null
    {
        return $this->totalPaymentDue;
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
    public function setAccountId(?string $accountId) : void
    {
        $this->accountId = $accountId;
    }
    public function getAccountId() : ?string
    {
        return $this->accountId;
    }
    public function setCustomer(Organization|Person|null $customer) : void
    {
        $this->customer = $customer;
    }
    public function getCustomer() : Organization|Person|null
    {
        return $this->customer;
    }
    public function setPaymentMethod(?PaymentMethod $paymentMethod) : void
    {
        $this->paymentMethod = $paymentMethod;
    }
    public function getPaymentMethod() : ?PaymentMethod
    {
        return $this->paymentMethod;
    }
    public function jsonSerialize() : object
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('paymentStatus' => $this->paymentStatus, 'billingPeriod' => $this->billingPeriod, 'scheduledPaymentDate' => $this->scheduledPaymentDate, 'category' => $this->category, 'provider' => $this->provider, 'paymentMethodId' => $this->paymentMethodId, 'referencesOrder' => $this->referencesOrder, 'minimumPaymentDue' => $this->minimumPaymentDue, 'totalPaymentDue' => $this->totalPaymentDue, 'broker' => $this->broker, 'paymentDueDate' => $this->paymentDueDate, 'confirmationNumber' => $this->confirmationNumber, 'accountId' => $this->accountId, 'customer' => $this->customer, 'paymentMethod' => $this->paymentMethod), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

