<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A part of a successively published publication such as a periodical or publication volume, often numbered, usually containing a grouping of works such as articles.<br/><br/>

See also <a href="http://blog.schema.org/2014/09/schemaorg-support-for-bibliographic_2.html">blog post</a>.')]
class PublicationIssue extends CreativeWork implements \JsonSerializable
{
    protected string|int|null $pageStart = null;
    protected ?string $pagination = null;
    protected string|int|null $pageEnd = null;
    protected int|string|null $issueNumber = null;
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
    public function setIssueNumber(int|string|null $issueNumber) : void
    {
        $this->issueNumber = $issueNumber;
    }
    public function getIssueNumber() : int|string|null
    {
        return $this->issueNumber;
    }
    public function jsonSerialize()
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('pageStart' => $this->pageStart, 'pagination' => $this->pagination, 'pageEnd' => $this->pageEnd, 'issueNumber' => $this->issueNumber), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

