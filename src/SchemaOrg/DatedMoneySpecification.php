<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A DatedMoneySpecification represents monetary values with optional start and end dates. For example, this could represent an employee\'s salary over a specific period of time. <strong>Note:</strong> This type has been superseded by <a class="localLink" href="http://schema.org/MonetaryAmount">MonetaryAmount</a> use of that type is recommended')]
class DatedMoneySpecification extends StructuredValue implements \JsonSerializable
{
    protected \PSX\DateTime\LocalDate|\PSX\DateTime\LocalDateTime|null $endDate = null;
    protected \PSX\DateTime\LocalDateTime|\PSX\DateTime\LocalDate|null $startDate = null;
    protected ?string $currency = null;
    protected float|MonetaryAmount|null $amount = null;
    public function setEndDate(\PSX\DateTime\LocalDate|\PSX\DateTime\LocalDateTime|null $endDate) : void
    {
        $this->endDate = $endDate;
    }
    public function getEndDate() : \PSX\DateTime\LocalDate|\PSX\DateTime\LocalDateTime|null
    {
        return $this->endDate;
    }
    public function setStartDate(\PSX\DateTime\LocalDateTime|\PSX\DateTime\LocalDate|null $startDate) : void
    {
        $this->startDate = $startDate;
    }
    public function getStartDate() : \PSX\DateTime\LocalDateTime|\PSX\DateTime\LocalDate|null
    {
        return $this->startDate;
    }
    public function setCurrency(?string $currency) : void
    {
        $this->currency = $currency;
    }
    public function getCurrency() : ?string
    {
        return $this->currency;
    }
    public function setAmount(float|MonetaryAmount|null $amount) : void
    {
        $this->amount = $amount;
    }
    public function getAmount() : float|MonetaryAmount|null
    {
        return $this->amount;
    }
    public function jsonSerialize() : object
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('endDate' => $this->endDate, 'startDate' => $this->startDate, 'currency' => $this->currency, 'amount' => $this->amount), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

