<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('An article, such as a news article or piece of investigative report. Newspapers and magazines have articles of many different types and this is intended to cover them all.<br/><br/>

See also <a href="http://blog.schema.org/2014/09/schemaorg-support-for-bibliographic_2.html">blog post</a>.')]
class Article extends CreativeWork implements \JsonSerializable
{
    protected string|int|null $pageStart = null;
    protected ?string $articleBody = null;
    protected ?string $pagination = null;
    protected string|int|null $pageEnd = null;
    protected \PSX\Uri\Uri|SpeakableSpecification|null $speakable = null;
    protected ?int $wordCount = null;
    protected ?string $articleSection = null;
    public function setPageStart(string|int|null $pageStart) : void
    {
        $this->pageStart = $pageStart;
    }
    public function getPageStart() : string|int|null
    {
        return $this->pageStart;
    }
    public function setArticleBody(?string $articleBody) : void
    {
        $this->articleBody = $articleBody;
    }
    public function getArticleBody() : ?string
    {
        return $this->articleBody;
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
    public function setSpeakable(\PSX\Uri\Uri|SpeakableSpecification|null $speakable) : void
    {
        $this->speakable = $speakable;
    }
    public function getSpeakable() : \PSX\Uri\Uri|SpeakableSpecification|null
    {
        return $this->speakable;
    }
    public function setWordCount(?int $wordCount) : void
    {
        $this->wordCount = $wordCount;
    }
    public function getWordCount() : ?int
    {
        return $this->wordCount;
    }
    public function setArticleSection(?string $articleSection) : void
    {
        $this->articleSection = $articleSection;
    }
    public function getArticleSection() : ?string
    {
        return $this->articleSection;
    }
    public function jsonSerialize()
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('pageStart' => $this->pageStart, 'articleBody' => $this->articleBody, 'pagination' => $this->pagination, 'pageEnd' => $this->pageEnd, 'speakable' => $this->speakable, 'wordCount' => $this->wordCount, 'articleSection' => $this->articleSection), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

