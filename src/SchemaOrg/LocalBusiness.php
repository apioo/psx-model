<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
 * @Description("A particular physical business or branch of an organization. Examples of LocalBusiness include a restaurant, a particular branch of a restaurant chain, a branch of a bank, a medical practice, a club, a bowling alley, etc.")
 */
class LocalBusiness extends Organization implements \JsonSerializable
{
    /**
     * @var string|null
     */
    protected $currenciesAccepted;
    /**
     * @var string|null
     */
    protected $openingHours;
    /**
     * @var string|null
     */
    protected $priceRange;
    /**
     * @var string|null
     */
    protected $paymentAccepted;
    /**
     * @param string|null $currenciesAccepted
     */
    public function setCurrenciesAccepted(?string $currenciesAccepted) : void
    {
        $this->currenciesAccepted = $currenciesAccepted;
    }
    /**
     * @return string|null
     */
    public function getCurrenciesAccepted() : ?string
    {
        return $this->currenciesAccepted;
    }
    /**
     * @param string|null $openingHours
     */
    public function setOpeningHours(?string $openingHours) : void
    {
        $this->openingHours = $openingHours;
    }
    /**
     * @return string|null
     */
    public function getOpeningHours() : ?string
    {
        return $this->openingHours;
    }
    /**
     * @param string|null $priceRange
     */
    public function setPriceRange(?string $priceRange) : void
    {
        $this->priceRange = $priceRange;
    }
    /**
     * @return string|null
     */
    public function getPriceRange() : ?string
    {
        return $this->priceRange;
    }
    /**
     * @param string|null $paymentAccepted
     */
    public function setPaymentAccepted(?string $paymentAccepted) : void
    {
        $this->paymentAccepted = $paymentAccepted;
    }
    /**
     * @return string|null
     */
    public function getPaymentAccepted() : ?string
    {
        return $this->paymentAccepted;
    }
    public function jsonSerialize()
    {
        return (object) array_filter(array('currenciesAccepted' => $this->currenciesAccepted, 'openingHours' => $this->openingHours, 'priceRange' => $this->priceRange, 'paymentAccepted' => $this->paymentAccepted), static function ($value) : bool {
            return $value !== null;
        });
    }
}
