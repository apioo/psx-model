<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
 * @Description("Organization: A business corporation.")
 */
class Corporation extends Organization
{
    /**
     * @var string|null
     */
    protected $tickerSymbol;
    /**
     * @param string|null $tickerSymbol
     */
    public function setTickerSymbol(?string $tickerSymbol) : void
    {
        $this->tickerSymbol = $tickerSymbol;
    }
    /**
     * @return string|null
     */
    public function getTickerSymbol() : ?string
    {
        return $this->tickerSymbol;
    }
}
