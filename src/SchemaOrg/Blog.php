<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
 * @Description("A blog.")
 */
class Blog extends CreativeWork implements \JsonSerializable
{
    /**
     * @var string|null
     */
    protected $issn;
    /**
     * @var BlogPosting|null
     */
    protected $blogPost;
    /**
     * @param string|null $issn
     */
    public function setIssn(?string $issn) : void
    {
        $this->issn = $issn;
    }
    /**
     * @return string|null
     */
    public function getIssn() : ?string
    {
        return $this->issn;
    }
    /**
     * @param BlogPosting|null $blogPost
     */
    public function setBlogPost(?BlogPosting $blogPost) : void
    {
        $this->blogPost = $blogPost;
    }
    /**
     * @return BlogPosting|null
     */
    public function getBlogPost() : ?BlogPosting
    {
        return $this->blogPost;
    }
    public function jsonSerialize()
    {
        return array_merge(parent::jsonSerialize(), array_filter(array('issn' => $this->issn, 'blogPost' => $this->blogPost), static function ($value) : bool {
            return $value !== null;
        }));
    }
}
