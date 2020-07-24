<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
 * @Description("The geographic shape of a place. A GeoShape can be described using several properties whose values are based on latitude/longitude pairs. Either whitespace or commas can be used to separate latitude and longitude; whitespace should be used when writing a list of several such points.")
 */
class GeoShape extends StructuredValue implements \JsonSerializable
{
    /**
     * @var string|null
     */
    protected $polygon;
    /**
     * @var string|Country|null
     */
    protected $addressCountry;
    /**
     * @var string|null
     */
    protected $postalCode;
    /**
     * @var string|null
     */
    protected $box;
    /**
     * @var float|string|null
     */
    protected $elevation;
    /**
     * @var string|null
     */
    protected $line;
    /**
     * @var string|PostalAddress|null
     */
    protected $address;
    /**
     * @var string|null
     */
    protected $circle;
    /**
     * @param string|null $polygon
     */
    public function setPolygon(?string $polygon) : void
    {
        $this->polygon = $polygon;
    }
    /**
     * @return string|null
     */
    public function getPolygon() : ?string
    {
        return $this->polygon;
    }
    /**
     * @param string|Country|null $addressCountry
     */
    public function setAddressCountry($addressCountry) : void
    {
        $this->addressCountry = $addressCountry;
    }
    /**
     * @return string|Country|null
     */
    public function getAddressCountry()
    {
        return $this->addressCountry;
    }
    /**
     * @param string|null $postalCode
     */
    public function setPostalCode(?string $postalCode) : void
    {
        $this->postalCode = $postalCode;
    }
    /**
     * @return string|null
     */
    public function getPostalCode() : ?string
    {
        return $this->postalCode;
    }
    /**
     * @param string|null $box
     */
    public function setBox(?string $box) : void
    {
        $this->box = $box;
    }
    /**
     * @return string|null
     */
    public function getBox() : ?string
    {
        return $this->box;
    }
    /**
     * @param float|string|null $elevation
     */
    public function setElevation($elevation) : void
    {
        $this->elevation = $elevation;
    }
    /**
     * @return float|string|null
     */
    public function getElevation()
    {
        return $this->elevation;
    }
    /**
     * @param string|null $line
     */
    public function setLine(?string $line) : void
    {
        $this->line = $line;
    }
    /**
     * @return string|null
     */
    public function getLine() : ?string
    {
        return $this->line;
    }
    /**
     * @param string|PostalAddress|null $address
     */
    public function setAddress($address) : void
    {
        $this->address = $address;
    }
    /**
     * @return string|PostalAddress|null
     */
    public function getAddress()
    {
        return $this->address;
    }
    /**
     * @param string|null $circle
     */
    public function setCircle(?string $circle) : void
    {
        $this->circle = $circle;
    }
    /**
     * @return string|null
     */
    public function getCircle() : ?string
    {
        return $this->circle;
    }
    public function jsonSerialize()
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('polygon' => $this->polygon, 'addressCountry' => $this->addressCountry, 'postalCode' => $this->postalCode, 'box' => $this->box, 'elevation' => $this->elevation, 'line' => $this->line, 'address' => $this->address, 'circle' => $this->circle), static function ($value) : bool {
            return $value !== null;
        }));
    }
}
