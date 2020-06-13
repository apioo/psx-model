<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
 * @Description("A work of art that is primarily visual in character.")
 */
class VisualArtwork extends CreativeWork
{
    /**
     * @var QuantitativeValue|Distance|null
     */
    protected $width;
    /**
     * @var \PSX\Uri\Uri|string|null
     */
    protected $artform;
    /**
     * @var string|\PSX\Uri\Uri|null
     */
    protected $artworkSurface;
    /**
     * @var Distance|QuantitativeValue|null
     */
    protected $height;
    /**
     * @var string|\PSX\Uri\Uri|null
     */
    protected $artMedium;
    /**
     * @var int|string|null
     */
    protected $artEdition;
    /**
     * @var Distance|QuantitativeValue|null
     */
    protected $depth;
    /**
     * @param QuantitativeValue|Distance|null $width
     */
    public function setWidth($width) : void
    {
        $this->width = $width;
    }
    /**
     * @return QuantitativeValue|Distance|null
     */
    public function getWidth()
    {
        return $this->width;
    }
    /**
     * @param \PSX\Uri\Uri|string|null $artform
     */
    public function setArtform($artform) : void
    {
        $this->artform = $artform;
    }
    /**
     * @return \PSX\Uri\Uri|string|null
     */
    public function getArtform()
    {
        return $this->artform;
    }
    /**
     * @param string|\PSX\Uri\Uri|null $artworkSurface
     */
    public function setArtworkSurface($artworkSurface) : void
    {
        $this->artworkSurface = $artworkSurface;
    }
    /**
     * @return string|\PSX\Uri\Uri|null
     */
    public function getArtworkSurface()
    {
        return $this->artworkSurface;
    }
    /**
     * @param Distance|QuantitativeValue|null $height
     */
    public function setHeight($height) : void
    {
        $this->height = $height;
    }
    /**
     * @return Distance|QuantitativeValue|null
     */
    public function getHeight()
    {
        return $this->height;
    }
    /**
     * @param string|\PSX\Uri\Uri|null $artMedium
     */
    public function setArtMedium($artMedium) : void
    {
        $this->artMedium = $artMedium;
    }
    /**
     * @return string|\PSX\Uri\Uri|null
     */
    public function getArtMedium()
    {
        return $this->artMedium;
    }
    /**
     * @param int|string|null $artEdition
     */
    public function setArtEdition($artEdition) : void
    {
        $this->artEdition = $artEdition;
    }
    /**
     * @return int|string|null
     */
    public function getArtEdition()
    {
        return $this->artEdition;
    }
    /**
     * @param Distance|QuantitativeValue|null $depth
     */
    public function setDepth($depth) : void
    {
        $this->depth = $depth;
    }
    /**
     * @return Distance|QuantitativeValue|null
     */
    public function getDepth()
    {
        return $this->depth;
    }
}
