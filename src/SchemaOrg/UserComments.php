<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('UserInteraction and its subtypes is an old way of talking about users interacting with pages. It is generally better to use <a class="localLink" href="http://schema.org/Action">Action</a>-based vocabulary, alongside types such as <a class="localLink" href="http://schema.org/Comment">Comment</a>.')]
class UserComments extends UserInteraction implements \JsonSerializable
{
    protected ?CreativeWork $discusses = null;
    protected \PSX\DateTime\Date|\DateTime|null $commentTime = null;
    protected Organization|Person|null $creator = null;
    protected ?string $commentText = null;
    protected ?\PSX\Uri\Uri $replyToUrl = null;
    public function setDiscusses(?CreativeWork $discusses) : void
    {
        $this->discusses = $discusses;
    }
    public function getDiscusses() : ?CreativeWork
    {
        return $this->discusses;
    }
    public function setCommentTime(\PSX\DateTime\Date|\DateTime|null $commentTime) : void
    {
        $this->commentTime = $commentTime;
    }
    public function getCommentTime() : \PSX\DateTime\Date|\DateTime|null
    {
        return $this->commentTime;
    }
    public function setCreator(Organization|Person|null $creator) : void
    {
        $this->creator = $creator;
    }
    public function getCreator() : Organization|Person|null
    {
        return $this->creator;
    }
    public function setCommentText(?string $commentText) : void
    {
        $this->commentText = $commentText;
    }
    public function getCommentText() : ?string
    {
        return $this->commentText;
    }
    public function setReplyToUrl(?\PSX\Uri\Uri $replyToUrl) : void
    {
        $this->replyToUrl = $replyToUrl;
    }
    public function getReplyToUrl() : ?\PSX\Uri\Uri
    {
        return $this->replyToUrl;
    }
    public function jsonSerialize() : object
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('discusses' => $this->discusses, 'commentTime' => $this->commentTime, 'creator' => $this->creator, 'commentText' => $this->commentText, 'replyToUrl' => $this->replyToUrl), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

