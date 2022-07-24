<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A blog.')]
class Blog extends CreativeWork implements \JsonSerializable
{
    protected ?string $issn = null;
    protected ?BlogPosting $blogPost = null;
    public function setIssn(?string $issn) : void
    {
        $this->issn = $issn;
    }
    public function getIssn() : ?string
    {
        return $this->issn;
    }
    public function setBlogPost(?BlogPosting $blogPost) : void
    {
        $this->blogPost = $blogPost;
    }
    public function getBlogPost() : ?BlogPosting
    {
        return $this->blogPost;
    }
    public function jsonSerialize() : object
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('issn' => $this->issn, 'blogPost' => $this->blogPost), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

