<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
* @Description("A part of a successively published publication such as a periodical or publication volume, often numbered, usually containing a grouping of works such as articles.<br/><br/>

See also <a href=""http://blog.schema.org/2014/09/schemaorg-support-for-bibliographic_2.html"">blog post</a>.")
*/
class PublicationIssue extends CreativeWork implements \JsonSerializable
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
     * @var int|string|null
     */
    protected $issueNumber;
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
     * @param int|string|null $issueNumber
     */
    public function setIssueNumber($issueNumber) : void
    {
        $this->issueNumber = $issueNumber;
    }
    /**
     * @return int|string|null
     */
    public function getIssueNumber()
    {
        return $this->issueNumber;
    }
    public function jsonSerialize()
    {
        return (object) array_filter(array('pageStart' => $this->pageStart, 'pagination' => $this->pagination, 'pageEnd' => $this->pageEnd, 'issueNumber' => $this->issueNumber), static function ($value) : bool {
            return $value !== null;
        });
    }
}
