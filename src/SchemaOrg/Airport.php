<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
 * @Description("An airport.")
 */
class Airport extends CivicStructure implements \JsonSerializable
{
    /**
     * @var string|null
     */
    protected $iataCode;
    /**
     * @var string|null
     */
    protected $icaoCode;
    /**
     * @param string|null $iataCode
     */
    public function setIataCode(?string $iataCode) : void
    {
        $this->iataCode = $iataCode;
    }
    /**
     * @return string|null
     */
    public function getIataCode() : ?string
    {
        return $this->iataCode;
    }
    /**
     * @param string|null $icaoCode
     */
    public function setIcaoCode(?string $icaoCode) : void
    {
        $this->icaoCode = $icaoCode;
    }
    /**
     * @return string|null
     */
    public function getIcaoCode() : ?string
    {
        return $this->icaoCode;
    }
    public function jsonSerialize()
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('iataCode' => $this->iataCode, 'icaoCode' => $this->icaoCode), static function ($value) : bool {
            return $value !== null;
        }));
    }
}
