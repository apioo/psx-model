<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A part of a successively published publication such as a periodical or multi-volume work, often numbered. It may represent a time span, such as a year.<br/><br/>

See also <a href="http://blog.schema.org/2014/09/schemaorg-support-for-bibliographic_2.html">blog post</a>.')]
class PublicationVolume extends CreativeWork implements \JsonSerializable
{
    protected string|int|null $pageStart = null;
    protected ?string $pagination = null;
    protected string|int|null $pageEnd = null;
    protected string|int|null $volumeNumber = null;
    public function setPageStart(string|int|null $pageStart) : void
    {
        $this->pageStart = $pageStart;
    }
    public function getPageStart() : string|int|null
    {
        return $this->pageStart;
    }
    public function setPagination(?string $pagination) : void
    {
        $this->pagination = $pagination;
    }
    public function getPagination() : ?string
    {
        return $this->pagination;
    }
    public function setPageEnd(string|int|null $pageEnd) : void
    {
        $this->pageEnd = $pageEnd;
    }
    public function getPageEnd() : string|int|null
    {
        return $this->pageEnd;
    }
    public function setVolumeNumber(string|int|null $volumeNumber) : void
    {
        $this->volumeNumber = $volumeNumber;
    }
    public function getVolumeNumber() : string|int|null
    {
        return $this->volumeNumber;
    }
    public function jsonSerialize()
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('pageStart' => $this->pageStart, 'pagination' => $this->pagination, 'pageEnd' => $this->pageEnd, 'volumeNumber' => $this->volumeNumber), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

