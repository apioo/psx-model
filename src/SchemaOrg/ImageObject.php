<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
 * @Description("An image file.")
 */
class ImageObject extends MediaObject implements \JsonSerializable
{
    /**
     * @var bool|null
     */
    protected $representativeOfPage;
    /**
     * @var ImageObject|null
     */
    protected $thumbnail;
    /**
     * @var string|PropertyValue|null
     */
    protected $exifData;
    /**
     * @var string|MediaObject|null
     */
    protected $caption;
    /**
     * @param bool|null $representativeOfPage
     */
    public function setRepresentativeOfPage(?bool $representativeOfPage) : void
    {
        $this->representativeOfPage = $representativeOfPage;
    }
    /**
     * @return bool|null
     */
    public function getRepresentativeOfPage() : ?bool
    {
        return $this->representativeOfPage;
    }
    /**
     * @param ImageObject|null $thumbnail
     */
    public function setThumbnail(?ImageObject $thumbnail) : void
    {
        $this->thumbnail = $thumbnail;
    }
    /**
     * @return ImageObject|null
     */
    public function getThumbnail() : ?ImageObject
    {
        return $this->thumbnail;
    }
    /**
     * @param string|PropertyValue|null $exifData
     */
    public function setExifData($exifData) : void
    {
        $this->exifData = $exifData;
    }
    /**
     * @return string|PropertyValue|null
     */
    public function getExifData()
    {
        return $this->exifData;
    }
    /**
     * @param string|MediaObject|null $caption
     */
    public function setCaption($caption) : void
    {
        $this->caption = $caption;
    }
    /**
     * @return string|MediaObject|null
     */
    public function getCaption()
    {
        return $this->caption;
    }
    public function jsonSerialize()
    {
        return (object) array_filter(array('representativeOfPage' => $this->representativeOfPage, 'thumbnail' => $this->thumbnail, 'exifData' => $this->exifData, 'caption' => $this->caption), static function ($value) : bool {
            return $value !== null;
        });
    }
}
