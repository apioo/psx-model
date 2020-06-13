<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
 * @Description("A statement of the money due for goods or services; a bill.")
 */
class Invoice extends Intangible
{
    /**
     * @var string|PaymentStatusType|null
     */
    protected $paymentStatus;
    /**
     * @var Duration|null
     */
    protected $billingPeriod;
    /**
     * @var \PSX\DateTime\Date|null
     */
    protected $scheduledPaymentDate;
    /**
     * @var \PSX\Uri\Uri|Thing|string|null
     */
    protected $category;
    /**
     * @var Organization|Person|null
     */
    protected $provider;
    /**
     * @var string|null
     */
    protected $paymentMethodId;
    /**
     * @var Order|null
     */
    protected $referencesOrder;
    /**
     * @var MonetaryAmount|PriceSpecification|null
     */
    protected $minimumPaymentDue;
    /**
     * @var PriceSpecification|MonetaryAmount|null
     */
    protected $totalPaymentDue;
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
     * @var string|null
     */
    protected $accountId;
    /**
     * @var Organization|Person|null
     */
    protected $customer;
    /**
     * @var PaymentMethod|null
     */
    protected $paymentMethod;
    /**
     * @param string|PaymentStatusType|null $paymentStatus
     */
    public function setPaymentStatus($paymentStatus) : void
    {
        $this->paymentStatus = $paymentStatus;
    }
    /**
     * @return string|PaymentStatusType|null
     */
    public function getPaymentStatus()
    {
        return $this->paymentStatus;
    }
    /**
     * @param Duration|null $billingPeriod
     */
    public function setBillingPeriod(?Duration $billingPeriod) : void
    {
        $this->billingPeriod = $billingPeriod;
    }
    /**
     * @return Duration|null
     */
    public function getBillingPeriod() : ?Duration
    {
        return $this->billingPeriod;
    }
    /**
     * @param \PSX\DateTime\Date|null $scheduledPaymentDate
     */
    public function setScheduledPaymentDate(?\PSX\DateTime\Date $scheduledPaymentDate) : void
    {
        $this->scheduledPaymentDate = $scheduledPaymentDate;
    }
    /**
     * @return \PSX\DateTime\Date|null
     */
    public function getScheduledPaymentDate() : ?\PSX\DateTime\Date
    {
        return $this->scheduledPaymentDate;
    }
    /**
     * @param \PSX\Uri\Uri|Thing|string|null $category
     */
    public function setCategory($category) : void
    {
        $this->category = $category;
    }
    /**
     * @return \PSX\Uri\Uri|Thing|string|null
     */
    public function getCategory()
    {
        return $this->category;
    }
    /**
     * @param Organization|Person|null $provider
     */
    public function setProvider($provider) : void
    {
        $this->provider = $provider;
    }
    /**
     * @return Organization|Person|null
     */
    public function getProvider()
    {
        return $this->provider;
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
     * @param Order|null $referencesOrder
     */
    public function setReferencesOrder(?Order $referencesOrder) : void
    {
        $this->referencesOrder = $referencesOrder;
    }
    /**
     * @return Order|null
     */
    public function getReferencesOrder() : ?Order
    {
        return $this->referencesOrder;
    }
    /**
     * @param MonetaryAmount|PriceSpecification|null $minimumPaymentDue
     */
    public function setMinimumPaymentDue($minimumPaymentDue) : void
    {
        $this->minimumPaymentDue = $minimumPaymentDue;
    }
    /**
     * @return MonetaryAmount|PriceSpecification|null
     */
    public function getMinimumPaymentDue()
    {
        return $this->minimumPaymentDue;
    }
    /**
     * @param PriceSpecification|MonetaryAmount|null $totalPaymentDue
     */
    public function setTotalPaymentDue($totalPaymentDue) : void
    {
        $this->totalPaymentDue = $totalPaymentDue;
    }
    /**
     * @return PriceSpecification|MonetaryAmount|null
     */
    public function getTotalPaymentDue()
    {
        return $this->totalPaymentDue;
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
     * @param string|null $accountId
     */
    public function setAccountId(?string $accountId) : void
    {
        $this->accountId = $accountId;
    }
    /**
     * @return string|null
     */
    public function getAccountId() : ?string
    {
        return $this->accountId;
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
}
