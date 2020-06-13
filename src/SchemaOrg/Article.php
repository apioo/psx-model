<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
* @Description("An article, such as a news article or piece of investigative report. Newspapers and magazines have articles of many different types and this is intended to cover them all.<br/><br/>

See also <a href=""http://blog.schema.org/2014/09/schemaorg-support-for-bibliographic_2.html"">blog post</a>.")
*/
class Article extends CreativeWork
{
    /**
     * @var string|int|null
     */
    protected $pageStart;
    /**
     * @var string|null
     */
    protected $articleBody;
    /**
     * @var string|null
     */
    protected $pagination;
    /**
     * @var string|int|null
     */
    protected $pageEnd;
    /**
     * @var \PSX\Uri\Uri|SpeakableSpecification|null
     */
    protected $speakable;
    /**
     * @var int|null
     */
    protected $wordCount;
    /**
     * @var string|null
     */
    protected $articleSection;
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
     * @param string|null $articleBody
     */
    public function setArticleBody(?string $articleBody) : void
    {
        $this->articleBody = $articleBody;
    }
    /**
     * @return string|null
     */
    public function getArticleBody() : ?string
    {
        return $this->articleBody;
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
     * @param \PSX\Uri\Uri|SpeakableSpecification|null $speakable
     */
    public function setSpeakable($speakable) : void
    {
        $this->speakable = $speakable;
    }
    /**
     * @return \PSX\Uri\Uri|SpeakableSpecification|null
     */
    public function getSpeakable()
    {
        return $this->speakable;
    }
    /**
     * @param int|null $wordCount
     */
    public function setWordCount(?int $wordCount) : void
    {
        $this->wordCount = $wordCount;
    }
    /**
     * @return int|null
     */
    public function getWordCount() : ?int
    {
        return $this->wordCount;
    }
    /**
     * @param string|null $articleSection
     */
    public function setArticleSection(?string $articleSection) : void
    {
        $this->articleSection = $articleSection;
    }
    /**
     * @return string|null
     */
    public function getArticleSection() : ?string
    {
        return $this->articleSection;
    }
}
