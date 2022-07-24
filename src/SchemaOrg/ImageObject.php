<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('An image file.')]
class ImageObject extends MediaObject implements \JsonSerializable
{
    protected ?bool $representativeOfPage = null;
    protected ?ImageObject $thumbnail = null;
    protected string|PropertyValue|null $exifData = null;
    protected string|MediaObject|null $caption = null;
    public function setRepresentativeOfPage(?bool $representativeOfPage) : void
    {
        $this->representativeOfPage = $representativeOfPage;
    }
    public function getRepresentativeOfPage() : ?bool
    {
        return $this->representativeOfPage;
    }
    public function setThumbnail(?ImageObject $thumbnail) : void
    {
        $this->thumbnail = $thumbnail;
    }
    public function getThumbnail() : ?ImageObject
    {
        return $this->thumbnail;
    }
    public function setExifData(string|PropertyValue|null $exifData) : void
    {
        $this->exifData = $exifData;
    }
    public function getExifData() : string|PropertyValue|null
    {
        return $this->exifData;
    }
    public function setCaption(string|MediaObject|null $caption) : void
    {
        $this->caption = $caption;
    }
    public function getCaption() : string|MediaObject|null
    {
        return $this->caption;
    }
    public function jsonSerialize() : object
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('representativeOfPage' => $this->representativeOfPage, 'thumbnail' => $this->thumbnail, 'exifData' => $this->exifData, 'caption' => $this->caption), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

