<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('The geographic shape of a place. A GeoShape can be described using several properties whose values are based on latitude/longitude pairs. Either whitespace or commas can be used to separate latitude and longitude; whitespace should be used when writing a list of several such points.')]
class GeoShape extends StructuredValue implements \JsonSerializable
{
    protected ?string $polygon = null;
    protected string|Country|null $addressCountry = null;
    protected ?string $postalCode = null;
    protected ?string $box = null;
    protected float|string|null $elevation = null;
    protected ?string $line = null;
    protected string|PostalAddress|null $address = null;
    protected ?string $circle = null;
    public function setPolygon(?string $polygon) : void
    {
        $this->polygon = $polygon;
    }
    public function getPolygon() : ?string
    {
        return $this->polygon;
    }
    public function setAddressCountry(string|Country|null $addressCountry) : void
    {
        $this->addressCountry = $addressCountry;
    }
    public function getAddressCountry() : string|Country|null
    {
        return $this->addressCountry;
    }
    public function setPostalCode(?string $postalCode) : void
    {
        $this->postalCode = $postalCode;
    }
    public function getPostalCode() : ?string
    {
        return $this->postalCode;
    }
    public function setBox(?string $box) : void
    {
        $this->box = $box;
    }
    public function getBox() : ?string
    {
        return $this->box;
    }
    public function setElevation(float|string|null $elevation) : void
    {
        $this->elevation = $elevation;
    }
    public function getElevation() : float|string|null
    {
        return $this->elevation;
    }
    public function setLine(?string $line) : void
    {
        $this->line = $line;
    }
    public function getLine() : ?string
    {
        return $this->line;
    }
    public function setAddress(string|PostalAddress|null $address) : void
    {
        $this->address = $address;
    }
    public function getAddress() : string|PostalAddress|null
    {
        return $this->address;
    }
    public function setCircle(?string $circle) : void
    {
        $this->circle = $circle;
    }
    public function getCircle() : ?string
    {
        return $this->circle;
    }
    public function jsonSerialize() : object
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('polygon' => $this->polygon, 'addressCountry' => $this->addressCountry, 'postalCode' => $this->postalCode, 'box' => $this->box, 'elevation' => $this->elevation, 'line' => $this->line, 'address' => $this->address, 'circle' => $this->circle), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

