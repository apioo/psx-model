<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
 * @Description("A post to a social media platform, including blog posts, tweets, Facebook posts, etc.")
 */
class SocialMediaPosting extends Article implements \JsonSerializable
{
    /**
     * @var CreativeWork|null
     */
    protected $sharedContent;
    /**
     * @param CreativeWork|null $sharedContent
     */
    public function setSharedContent(?CreativeWork $sharedContent) : void
    {
        $this->sharedContent = $sharedContent;
    }
    /**
     * @return CreativeWork|null
     */
    public function getSharedContent() : ?CreativeWork
    {
        return $this->sharedContent;
    }
    public function jsonSerialize()
    {
        return array_merge(parent::jsonSerialize(), array_filter(array('sharedContent' => $this->sharedContent), static function ($value) : bool {
            return $value !== null;
        }));
    }
}
