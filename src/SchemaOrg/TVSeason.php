<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
 * @Description("Season dedicated to TV broadcast and associated online delivery.")
 */
class TVSeason extends CreativeWorkSeason
{
    /**
     * @var Country|null
     */
    protected $countryOfOrigin;
    /**
     * @param Country|null $countryOfOrigin
     */
    public function setCountryOfOrigin(?Country $countryOfOrigin) : void
    {
        $this->countryOfOrigin = $countryOfOrigin;
    }
    /**
     * @return Country|null
     */
    public function getCountryOfOrigin() : ?Country
    {
        return $this->countryOfOrigin;
    }
}
