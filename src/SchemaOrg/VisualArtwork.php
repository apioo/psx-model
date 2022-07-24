<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A work of art that is primarily visual in character.')]
class VisualArtwork extends CreativeWork implements \JsonSerializable
{
    protected QuantitativeValue|Distance|null $width = null;
    protected \PSX\Uri\Uri|string|null $artform = null;
    protected string|\PSX\Uri\Uri|null $artworkSurface = null;
    protected Distance|QuantitativeValue|null $height = null;
    protected string|\PSX\Uri\Uri|null $artMedium = null;
    protected int|string|null $artEdition = null;
    protected Distance|QuantitativeValue|null $depth = null;
    public function setWidth(QuantitativeValue|Distance|null $width) : void
    {
        $this->width = $width;
    }
    public function getWidth() : QuantitativeValue|Distance|null
    {
        return $this->width;
    }
    public function setArtform(\PSX\Uri\Uri|string|null $artform) : void
    {
        $this->artform = $artform;
    }
    public function getArtform() : \PSX\Uri\Uri|string|null
    {
        return $this->artform;
    }
    public function setArtworkSurface(string|\PSX\Uri\Uri|null $artworkSurface) : void
    {
        $this->artworkSurface = $artworkSurface;
    }
    public function getArtworkSurface() : string|\PSX\Uri\Uri|null
    {
        return $this->artworkSurface;
    }
    public function setHeight(Distance|QuantitativeValue|null $height) : void
    {
        $this->height = $height;
    }
    public function getHeight() : Distance|QuantitativeValue|null
    {
        return $this->height;
    }
    public function setArtMedium(string|\PSX\Uri\Uri|null $artMedium) : void
    {
        $this->artMedium = $artMedium;
    }
    public function getArtMedium() : string|\PSX\Uri\Uri|null
    {
        return $this->artMedium;
    }
    public function setArtEdition(int|string|null $artEdition) : void
    {
        $this->artEdition = $artEdition;
    }
    public function getArtEdition() : int|string|null
    {
        return $this->artEdition;
    }
    public function setDepth(Distance|QuantitativeValue|null $depth) : void
    {
        $this->depth = $depth;
    }
    public function getDepth() : Distance|QuantitativeValue|null
    {
        return $this->depth;
    }
    public function jsonSerialize() : object
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('width' => $this->width, 'artform' => $this->artform, 'artworkSurface' => $this->artworkSurface, 'height' => $this->height, 'artMedium' => $this->artMedium, 'artEdition' => $this->artEdition, 'depth' => $this->depth), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

