<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A comment on an item - for example, a comment on a blog post. The comment\'s content is expressed via the <a class="localLink" href="http://schema.org/text">text</a> property, and its topic via <a class="localLink" href="http://schema.org/about">about</a>, properties shared with all CreativeWorks.')]
class Comment extends CreativeWork implements \JsonSerializable
{
    protected ?int $upvoteCount = null;
    protected ?int $downvoteCount = null;
    protected ?Question $parentItem = null;
    public function setUpvoteCount(?int $upvoteCount) : void
    {
        $this->upvoteCount = $upvoteCount;
    }
    public function getUpvoteCount() : ?int
    {
        return $this->upvoteCount;
    }
    public function setDownvoteCount(?int $downvoteCount) : void
    {
        $this->downvoteCount = $downvoteCount;
    }
    public function getDownvoteCount() : ?int
    {
        return $this->downvoteCount;
    }
    public function setParentItem(?Question $parentItem) : void
    {
        $this->parentItem = $parentItem;
    }
    public function getParentItem() : ?Question
    {
        return $this->parentItem;
    }
    public function jsonSerialize() : object
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('upvoteCount' => $this->upvoteCount, 'downvoteCount' => $this->downvoteCount, 'parentItem' => $this->parentItem), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

