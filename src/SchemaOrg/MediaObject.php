<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
 * @Description("A media object, such as an image, video, or audio object embedded in a web page or a downloadable dataset i.e. DataDownload. Note that a creative work may have many media objects associated with it on the same web page. For example, a page about a single song (MusicRecording) may have a music video (VideoObject), and a high and low bandwidth audio stream (2 AudioObject's).")
 */
class MediaObject extends CreativeWork implements \JsonSerializable
{
    /**
     * @var QuantitativeValue|Distance|null
     */
    protected $width;
    /**
     * @var \PSX\Uri\Uri|null
     */
    protected $contentUrl;
    /**
     * @var \PSX\Uri\Uri|string|null
     */
    protected $encodingFormat;
    /**
     * @var NewsArticle|null
     */
    protected $associatedArticle;
    /**
     * @var Distance|QuantitativeValue|null
     */
    protected $height;
    /**
     * @var Organization|null
     */
    protected $productionCompany;
    /**
     * @var \PSX\DateTime\Time|\DateTime|null
     */
    protected $startTime;
    /**
     * @var \PSX\DateTime\Time|\DateTime|null
     */
    protected $endTime;
    /**
     * @var bool|MediaSubscription|null
     */
    protected $requiresSubscription;
    /**
     * @var string|null
     */
    protected $playerType;
    /**
     * @var string|null
     */
    protected $contentSize;
    /**
     * @var string|null
     */
    protected $bitrate;
    /**
     * @var \PSX\Uri\Uri|null
     */
    protected $embedUrl;
    /**
     * @var \PSX\DateTime\Date|null
     */
    protected $uploadDate;
    /**
     * @var Duration|null
     */
    protected $duration;
    /**
     * @var Place|null
     */
    protected $regionsAllowed;
    /**
     * @var CreativeWork|null
     */
    protected $encodesCreativeWork;
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
     * @param \PSX\Uri\Uri|null $contentUrl
     */
    public function setContentUrl(?\PSX\Uri\Uri $contentUrl) : void
    {
        $this->contentUrl = $contentUrl;
    }
    /**
     * @return \PSX\Uri\Uri|null
     */
    public function getContentUrl() : ?\PSX\Uri\Uri
    {
        return $this->contentUrl;
    }
    /**
     * @param \PSX\Uri\Uri|string|null $encodingFormat
     */
    public function setEncodingFormat($encodingFormat) : void
    {
        $this->encodingFormat = $encodingFormat;
    }
    /**
     * @return \PSX\Uri\Uri|string|null
     */
    public function getEncodingFormat()
    {
        return $this->encodingFormat;
    }
    /**
     * @param NewsArticle|null $associatedArticle
     */
    public function setAssociatedArticle(?NewsArticle $associatedArticle) : void
    {
        $this->associatedArticle = $associatedArticle;
    }
    /**
     * @return NewsArticle|null
     */
    public function getAssociatedArticle() : ?NewsArticle
    {
        return $this->associatedArticle;
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
     * @param Organization|null $productionCompany
     */
    public function setProductionCompany(?Organization $productionCompany) : void
    {
        $this->productionCompany = $productionCompany;
    }
    /**
     * @return Organization|null
     */
    public function getProductionCompany() : ?Organization
    {
        return $this->productionCompany;
    }
    /**
     * @param \PSX\DateTime\Time|\DateTime|null $startTime
     */
    public function setStartTime($startTime) : void
    {
        $this->startTime = $startTime;
    }
    /**
     * @return \PSX\DateTime\Time|\DateTime|null
     */
    public function getStartTime()
    {
        return $this->startTime;
    }
    /**
     * @param \PSX\DateTime\Time|\DateTime|null $endTime
     */
    public function setEndTime($endTime) : void
    {
        $this->endTime = $endTime;
    }
    /**
     * @return \PSX\DateTime\Time|\DateTime|null
     */
    public function getEndTime()
    {
        return $this->endTime;
    }
    /**
     * @param bool|MediaSubscription|null $requiresSubscription
     */
    public function setRequiresSubscription($requiresSubscription) : void
    {
        $this->requiresSubscription = $requiresSubscription;
    }
    /**
     * @return bool|MediaSubscription|null
     */
    public function getRequiresSubscription()
    {
        return $this->requiresSubscription;
    }
    /**
     * @param string|null $playerType
     */
    public function setPlayerType(?string $playerType) : void
    {
        $this->playerType = $playerType;
    }
    /**
     * @return string|null
     */
    public function getPlayerType() : ?string
    {
        return $this->playerType;
    }
    /**
     * @param string|null $contentSize
     */
    public function setContentSize(?string $contentSize) : void
    {
        $this->contentSize = $contentSize;
    }
    /**
     * @return string|null
     */
    public function getContentSize() : ?string
    {
        return $this->contentSize;
    }
    /**
     * @param string|null $bitrate
     */
    public function setBitrate(?string $bitrate) : void
    {
        $this->bitrate = $bitrate;
    }
    /**
     * @return string|null
     */
    public function getBitrate() : ?string
    {
        return $this->bitrate;
    }
    /**
     * @param \PSX\Uri\Uri|null $embedUrl
     */
    public function setEmbedUrl(?\PSX\Uri\Uri $embedUrl) : void
    {
        $this->embedUrl = $embedUrl;
    }
    /**
     * @return \PSX\Uri\Uri|null
     */
    public function getEmbedUrl() : ?\PSX\Uri\Uri
    {
        return $this->embedUrl;
    }
    /**
     * @param \PSX\DateTime\Date|null $uploadDate
     */
    public function setUploadDate(?\PSX\DateTime\Date $uploadDate) : void
    {
        $this->uploadDate = $uploadDate;
    }
    /**
     * @return \PSX\DateTime\Date|null
     */
    public function getUploadDate() : ?\PSX\DateTime\Date
    {
        return $this->uploadDate;
    }
    /**
     * @param Duration|null $duration
     */
    public function setDuration(?Duration $duration) : void
    {
        $this->duration = $duration;
    }
    /**
     * @return Duration|null
     */
    public function getDuration() : ?Duration
    {
        return $this->duration;
    }
    /**
     * @param Place|null $regionsAllowed
     */
    public function setRegionsAllowed(?Place $regionsAllowed) : void
    {
        $this->regionsAllowed = $regionsAllowed;
    }
    /**
     * @return Place|null
     */
    public function getRegionsAllowed() : ?Place
    {
        return $this->regionsAllowed;
    }
    /**
     * @param CreativeWork|null $encodesCreativeWork
     */
    public function setEncodesCreativeWork(?CreativeWork $encodesCreativeWork) : void
    {
        $this->encodesCreativeWork = $encodesCreativeWork;
    }
    /**
     * @return CreativeWork|null
     */
    public function getEncodesCreativeWork() : ?CreativeWork
    {
        return $this->encodesCreativeWork;
    }
    public function jsonSerialize()
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('width' => $this->width, 'contentUrl' => $this->contentUrl, 'encodingFormat' => $this->encodingFormat, 'associatedArticle' => $this->associatedArticle, 'height' => $this->height, 'productionCompany' => $this->productionCompany, 'startTime' => $this->startTime, 'endTime' => $this->endTime, 'requiresSubscription' => $this->requiresSubscription, 'playerType' => $this->playerType, 'contentSize' => $this->contentSize, 'bitrate' => $this->bitrate, 'embedUrl' => $this->embedUrl, 'uploadDate' => $this->uploadDate, 'duration' => $this->duration, 'regionsAllowed' => $this->regionsAllowed, 'encodesCreativeWork' => $this->encodesCreativeWork), static function ($value) : bool {
            return $value !== null;
        }));
    }
}
