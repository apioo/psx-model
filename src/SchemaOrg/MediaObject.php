<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A media object, such as an image, video, or audio object embedded in a web page or a downloadable dataset i.e. DataDownload. Note that a creative work may have many media objects associated with it on the same web page. For example, a page about a single song (MusicRecording) may have a music video (VideoObject), and a high and low bandwidth audio stream (2 AudioObject\'s).')]
class MediaObject extends CreativeWork implements \JsonSerializable
{
    protected QuantitativeValue|Distance|null $width = null;
    protected ?\PSX\Uri\Uri $contentUrl = null;
    protected \PSX\Uri\Uri|string|null $encodingFormat = null;
    protected ?NewsArticle $associatedArticle = null;
    protected Distance|QuantitativeValue|null $height = null;
    protected ?Organization $productionCompany = null;
    protected \PSX\DateTime\Time|\DateTime|null $startTime = null;
    protected \PSX\DateTime\Time|\DateTime|null $endTime = null;
    protected bool|MediaSubscription|null $requiresSubscription = null;
    protected ?string $playerType = null;
    protected ?string $contentSize = null;
    protected ?string $bitrate = null;
    protected ?\PSX\Uri\Uri $embedUrl = null;
    protected ?\PSX\DateTime\Date $uploadDate = null;
    protected ?Duration $duration = null;
    protected ?Place $regionsAllowed = null;
    protected ?CreativeWork $encodesCreativeWork = null;
    public function setWidth(QuantitativeValue|Distance|null $width) : void
    {
        $this->width = $width;
    }
    public function getWidth() : QuantitativeValue|Distance|null
    {
        return $this->width;
    }
    public function setContentUrl(?\PSX\Uri\Uri $contentUrl) : void
    {
        $this->contentUrl = $contentUrl;
    }
    public function getContentUrl() : ?\PSX\Uri\Uri
    {
        return $this->contentUrl;
    }
    public function setEncodingFormat(\PSX\Uri\Uri|string|null $encodingFormat) : void
    {
        $this->encodingFormat = $encodingFormat;
    }
    public function getEncodingFormat() : \PSX\Uri\Uri|string|null
    {
        return $this->encodingFormat;
    }
    public function setAssociatedArticle(?NewsArticle $associatedArticle) : void
    {
        $this->associatedArticle = $associatedArticle;
    }
    public function getAssociatedArticle() : ?NewsArticle
    {
        return $this->associatedArticle;
    }
    public function setHeight(Distance|QuantitativeValue|null $height) : void
    {
        $this->height = $height;
    }
    public function getHeight() : Distance|QuantitativeValue|null
    {
        return $this->height;
    }
    public function setProductionCompany(?Organization $productionCompany) : void
    {
        $this->productionCompany = $productionCompany;
    }
    public function getProductionCompany() : ?Organization
    {
        return $this->productionCompany;
    }
    public function setStartTime(\PSX\DateTime\Time|\DateTime|null $startTime) : void
    {
        $this->startTime = $startTime;
    }
    public function getStartTime() : \PSX\DateTime\Time|\DateTime|null
    {
        return $this->startTime;
    }
    public function setEndTime(\PSX\DateTime\Time|\DateTime|null $endTime) : void
    {
        $this->endTime = $endTime;
    }
    public function getEndTime() : \PSX\DateTime\Time|\DateTime|null
    {
        return $this->endTime;
    }
    public function setRequiresSubscription(bool|MediaSubscription|null $requiresSubscription) : void
    {
        $this->requiresSubscription = $requiresSubscription;
    }
    public function getRequiresSubscription() : bool|MediaSubscription|null
    {
        return $this->requiresSubscription;
    }
    public function setPlayerType(?string $playerType) : void
    {
        $this->playerType = $playerType;
    }
    public function getPlayerType() : ?string
    {
        return $this->playerType;
    }
    public function setContentSize(?string $contentSize) : void
    {
        $this->contentSize = $contentSize;
    }
    public function getContentSize() : ?string
    {
        return $this->contentSize;
    }
    public function setBitrate(?string $bitrate) : void
    {
        $this->bitrate = $bitrate;
    }
    public function getBitrate() : ?string
    {
        return $this->bitrate;
    }
    public function setEmbedUrl(?\PSX\Uri\Uri $embedUrl) : void
    {
        $this->embedUrl = $embedUrl;
    }
    public function getEmbedUrl() : ?\PSX\Uri\Uri
    {
        return $this->embedUrl;
    }
    public function setUploadDate(?\PSX\DateTime\Date $uploadDate) : void
    {
        $this->uploadDate = $uploadDate;
    }
    public function getUploadDate() : ?\PSX\DateTime\Date
    {
        return $this->uploadDate;
    }
    public function setDuration(?Duration $duration) : void
    {
        $this->duration = $duration;
    }
    public function getDuration() : ?Duration
    {
        return $this->duration;
    }
    public function setRegionsAllowed(?Place $regionsAllowed) : void
    {
        $this->regionsAllowed = $regionsAllowed;
    }
    public function getRegionsAllowed() : ?Place
    {
        return $this->regionsAllowed;
    }
    public function setEncodesCreativeWork(?CreativeWork $encodesCreativeWork) : void
    {
        $this->encodesCreativeWork = $encodesCreativeWork;
    }
    public function getEncodesCreativeWork() : ?CreativeWork
    {
        return $this->encodesCreativeWork;
    }
    public function jsonSerialize() : object
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('width' => $this->width, 'contentUrl' => $this->contentUrl, 'encodingFormat' => $this->encodingFormat, 'associatedArticle' => $this->associatedArticle, 'height' => $this->height, 'productionCompany' => $this->productionCompany, 'startTime' => $this->startTime, 'endTime' => $this->endTime, 'requiresSubscription' => $this->requiresSubscription, 'playerType' => $this->playerType, 'contentSize' => $this->contentSize, 'bitrate' => $this->bitrate, 'embedUrl' => $this->embedUrl, 'uploadDate' => $this->uploadDate, 'duration' => $this->duration, 'regionsAllowed' => $this->regionsAllowed, 'encodesCreativeWork' => $this->encodesCreativeWork), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

