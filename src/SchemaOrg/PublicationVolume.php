<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
* @Description("A part of a successively published publication such as a periodical or multi-volume work, often numbered. It may represent a time span, such as a year.<br/><br/>

See also <a href=""http://blog.schema.org/2014/09/schemaorg-support-for-bibliographic_2.html"">blog post</a>.")
*/
class PublicationVolume extends CreativeWork implements \JsonSerializable
{
    /**
     * @var string|int|null
     */
    protected $pageStart;
    /**
     * @var string|null
     */
    protected $pagination;
    /**
     * @var string|int|null
     */
    protected $pageEnd;
    /**
     * @var string|int|null
     */
    protected $volumeNumber;
    /**
     * @param string|int|null $pageStart
     */
    public function setPageStart($pageStart) : void
    {
        $this->pageStart = $pageStart;
    }
    /**
     * @return string|int|null
     */
    public function getPageStart()
    {
        return $this->pageStart;
    }
    /**
     * @param string|null $pagination
     */
    public function setPagination(?string $pagination) : void
    {
        $this->pagination = $pagination;
    }
    /**
     * @return string|null
     */
    public function getPagination() : ?string
    {
        return $this->pagination;
    }
    /**
     * @param string|int|null $pageEnd
     */
    public function setPageEnd($pageEnd) : void
    {
        $this->pageEnd = $pageEnd;
    }
    /**
     * @return string|int|null
     */
    public function getPageEnd()
    {
        return $this->pageEnd;
    }
    /**
     * @param string|int|null $volumeNumber
     */
    public function setVolumeNumber($volumeNumber) : void
    {
        $this->volumeNumber = $volumeNumber;
    }
    /**
     * @return string|int|null
     */
    public function getVolumeNumber()
    {
        return $this->volumeNumber;
    }
    public function jsonSerialize()
    {
        return array_merge(parent::jsonSerialize(), array_filter(array('pageStart' => $this->pageStart, 'pagination' => $this->pagination, 'pageEnd' => $this->pageEnd, 'volumeNumber' => $this->volumeNumber), static function ($value) : bool {
            return $value !== null;
        }));
    }
}
