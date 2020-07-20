<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
 * @Description("Season dedicated to TV broadcast and associated online delivery.")
 */
class TVSeason extends CreativeWorkSeason implements \JsonSerializable
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
    public function jsonSerialize()
    {
        return (object) array_filter(array('countryOfOrigin' => $this->countryOfOrigin), static function ($value) : bool {
            return $value !== null;
        });
    }
}
