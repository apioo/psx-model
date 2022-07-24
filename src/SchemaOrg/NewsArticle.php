<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A NewsArticle is an article whose content reports news, or provides background context and supporting materials for understanding the news.<br/><br/>

A more detailed overview of <a href="/docs/news.html">schema.org News markup</a> is also available.')]
class NewsArticle extends Article implements \JsonSerializable
{
    protected ?string $printPage = null;
    protected ?string $printSection = null;
    protected ?string $printColumn = null;
    protected ?string $dateline = null;
    protected ?string $printEdition = null;
    public function setPrintPage(?string $printPage) : void
    {
        $this->printPage = $printPage;
    }
    public function getPrintPage() : ?string
    {
        return $this->printPage;
    }
    public function setPrintSection(?string $printSection) : void
    {
        $this->printSection = $printSection;
    }
    public function getPrintSection() : ?string
    {
        return $this->printSection;
    }
    public function setPrintColumn(?string $printColumn) : void
    {
        $this->printColumn = $printColumn;
    }
    public function getPrintColumn() : ?string
    {
        return $this->printColumn;
    }
    public function setDateline(?string $dateline) : void
    {
        $this->dateline = $dateline;
    }
    public function getDateline() : ?string
    {
        return $this->dateline;
    }
    public function setPrintEdition(?string $printEdition) : void
    {
        $this->printEdition = $printEdition;
    }
    public function getPrintEdition() : ?string
    {
        return $this->printEdition;
    }
    public function jsonSerialize() : object
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('printPage' => $this->printPage, 'printSection' => $this->printSection, 'printColumn' => $this->printColumn, 'dateline' => $this->dateline, 'printEdition' => $this->printEdition), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

