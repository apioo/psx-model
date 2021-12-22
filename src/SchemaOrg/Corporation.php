<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('Organization: A business corporation.')]
class Corporation extends Organization implements \JsonSerializable
{
    protected ?string $tickerSymbol = null;
    public function setTickerSymbol(?string $tickerSymbol) : void
    {
        $this->tickerSymbol = $tickerSymbol;
    }
    public function getTickerSymbol() : ?string
    {
        return $this->tickerSymbol;
    }
    public function jsonSerialize()
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('tickerSymbol' => $this->tickerSymbol), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

