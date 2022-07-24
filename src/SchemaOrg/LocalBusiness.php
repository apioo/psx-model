<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A particular physical business or branch of an organization. Examples of LocalBusiness include a restaurant, a particular branch of a restaurant chain, a branch of a bank, a medical practice, a club, a bowling alley, etc.')]
class LocalBusiness extends Organization implements \JsonSerializable
{
    protected ?string $currenciesAccepted = null;
    protected ?string $openingHours = null;
    protected ?string $priceRange = null;
    protected ?string $paymentAccepted = null;
    public function setCurrenciesAccepted(?string $currenciesAccepted) : void
    {
        $this->currenciesAccepted = $currenciesAccepted;
    }
    public function getCurrenciesAccepted() : ?string
    {
        return $this->currenciesAccepted;
    }
    public function setOpeningHours(?string $openingHours) : void
    {
        $this->openingHours = $openingHours;
    }
    public function getOpeningHours() : ?string
    {
        return $this->openingHours;
    }
    public function setPriceRange(?string $priceRange) : void
    {
        $this->priceRange = $priceRange;
    }
    public function getPriceRange() : ?string
    {
        return $this->priceRange;
    }
    public function setPaymentAccepted(?string $paymentAccepted) : void
    {
        $this->paymentAccepted = $paymentAccepted;
    }
    public function getPaymentAccepted() : ?string
    {
        return $this->paymentAccepted;
    }
    public function jsonSerialize() : object
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('currenciesAccepted' => $this->currenciesAccepted, 'openingHours' => $this->openingHours, 'priceRange' => $this->priceRange, 'paymentAccepted' => $this->paymentAccepted), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

