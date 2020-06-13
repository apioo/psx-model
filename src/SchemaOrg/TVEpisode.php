<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
 * @Description("A TV episode which can be part of a series or season.")
 */
class TVEpisode extends Episode
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
