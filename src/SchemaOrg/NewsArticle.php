<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
* @Description("A NewsArticle is an article whose content reports news, or provides background context and supporting materials for understanding the news.<br/><br/>

A more detailed overview of <a href=""/docs/news.html"">schema.org News markup</a> is also available.")
*/
class NewsArticle extends Article
{
    /**
     * @var string|null
     */
    protected $printPage;
    /**
     * @var string|null
     */
    protected $printSection;
    /**
     * @var string|null
     */
    protected $printColumn;
    /**
     * @var string|null
     */
    protected $dateline;
    /**
     * @var string|null
     */
    protected $printEdition;
    /**
     * @param string|null $printPage
     */
    public function setPrintPage(?string $printPage) : void
    {
        $this->printPage = $printPage;
    }
    /**
     * @return string|null
     */
    public function getPrintPage() : ?string
    {
        return $this->printPage;
    }
    /**
     * @param string|null $printSection
     */
    public function setPrintSection(?string $printSection) : void
    {
        $this->printSection = $printSection;
    }
    /**
     * @return string|null
     */
    public function getPrintSection() : ?string
    {
        return $this->printSection;
    }
    /**
     * @param string|null $printColumn
     */
    public function setPrintColumn(?string $printColumn) : void
    {
        $this->printColumn = $printColumn;
    }
    /**
     * @return string|null
     */
    public function getPrintColumn() : ?string
    {
        return $this->printColumn;
    }
    /**
     * @param string|null $dateline
     */
    public function setDateline(?string $dateline) : void
    {
        $this->dateline = $dateline;
    }
    /**
     * @return string|null
     */
    public function getDateline() : ?string
    {
        return $this->dateline;
    }
    /**
     * @param string|null $printEdition
     */
    public function setPrintEdition(?string $printEdition) : void
    {
        $this->printEdition = $printEdition;
    }
    /**
     * @return string|null
     */
    public function getPrintEdition() : ?string
    {
        return $this->printEdition;
    }
}
