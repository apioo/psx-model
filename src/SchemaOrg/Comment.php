<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
 * @Description("A comment on an item - for example, a comment on a blog post. The comment's content is expressed via the <a class=""localLink"" href=""http://schema.org/text"">text</a> property, and its topic via <a class=""localLink"" href=""http://schema.org/about"">about</a>, properties shared with all CreativeWorks.")
 */
class Comment extends CreativeWork implements \JsonSerializable
{
    /**
     * @var int|null
     */
    protected $upvoteCount;
    /**
     * @var int|null
     */
    protected $downvoteCount;
    /**
     * @var Question|null
     */
    protected $parentItem;
    /**
     * @param int|null $upvoteCount
     */
    public function setUpvoteCount(?int $upvoteCount) : void
    {
        $this->upvoteCount = $upvoteCount;
    }
    /**
     * @return int|null
     */
    public function getUpvoteCount() : ?int
    {
        return $this->upvoteCount;
    }
    /**
     * @param int|null $downvoteCount
     */
    public function setDownvoteCount(?int $downvoteCount) : void
    {
        $this->downvoteCount = $downvoteCount;
    }
    /**
     * @return int|null
     */
    public function getDownvoteCount() : ?int
    {
        return $this->downvoteCount;
    }
    /**
     * @param Question|null $parentItem
     */
    public function setParentItem(?Question $parentItem) : void
    {
        $this->parentItem = $parentItem;
    }
    /**
     * @return Question|null
     */
    public function getParentItem() : ?Question
    {
        return $this->parentItem;
    }
    public function jsonSerialize()
    {
        return array_merge(parent::jsonSerialize(), array_filter(array('upvoteCount' => $this->upvoteCount, 'downvoteCount' => $this->downvoteCount, 'parentItem' => $this->parentItem), static function ($value) : bool {
            return $value !== null;
        }));
    }
}
