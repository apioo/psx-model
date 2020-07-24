<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
 * @Description("UserInteraction and its subtypes is an old way of talking about users interacting with pages. It is generally better to use <a class=""localLink"" href=""http://schema.org/Action"">Action</a>-based vocabulary, alongside types such as <a class=""localLink"" href=""http://schema.org/Comment"">Comment</a>.")
 */
class UserComments extends UserInteraction implements \JsonSerializable
{
    /**
     * @var CreativeWork|null
     */
    protected $discusses;
    /**
     * @var \PSX\DateTime\Date|\DateTime|null
     */
    protected $commentTime;
    /**
     * @var Organization|Person|null
     */
    protected $creator;
    /**
     * @var string|null
     */
    protected $commentText;
    /**
     * @var \PSX\Uri\Uri|null
     */
    protected $replyToUrl;
    /**
     * @param CreativeWork|null $discusses
     */
    public function setDiscusses(?CreativeWork $discusses) : void
    {
        $this->discusses = $discusses;
    }
    /**
     * @return CreativeWork|null
     */
    public function getDiscusses() : ?CreativeWork
    {
        return $this->discusses;
    }
    /**
     * @param \PSX\DateTime\Date|\DateTime|null $commentTime
     */
    public function setCommentTime($commentTime) : void
    {
        $this->commentTime = $commentTime;
    }
    /**
     * @return \PSX\DateTime\Date|\DateTime|null
     */
    public function getCommentTime()
    {
        return $this->commentTime;
    }
    /**
     * @param Organization|Person|null $creator
     */
    public function setCreator($creator) : void
    {
        $this->creator = $creator;
    }
    /**
     * @return Organization|Person|null
     */
    public function getCreator()
    {
        return $this->creator;
    }
    /**
     * @param string|null $commentText
     */
    public function setCommentText(?string $commentText) : void
    {
        $this->commentText = $commentText;
    }
    /**
     * @return string|null
     */
    public function getCommentText() : ?string
    {
        return $this->commentText;
    }
    /**
     * @param \PSX\Uri\Uri|null $replyToUrl
     */
    public function setReplyToUrl(?\PSX\Uri\Uri $replyToUrl) : void
    {
        $this->replyToUrl = $replyToUrl;
    }
    /**
     * @return \PSX\Uri\Uri|null
     */
    public function getReplyToUrl() : ?\PSX\Uri\Uri
    {
        return $this->replyToUrl;
    }
    public function jsonSerialize()
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('discusses' => $this->discusses, 'commentTime' => $this->commentTime, 'creator' => $this->creator, 'commentText' => $this->commentText, 'replyToUrl' => $this->replyToUrl), static function ($value) : bool {
            return $value !== null;
        }));
    }
}
