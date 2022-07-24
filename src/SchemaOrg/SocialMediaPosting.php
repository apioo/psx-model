<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A post to a social media platform, including blog posts, tweets, Facebook posts, etc.')]
class SocialMediaPosting extends Article implements \JsonSerializable
{
    protected ?CreativeWork $sharedContent = null;
    public function setSharedContent(?CreativeWork $sharedContent) : void
    {
        $this->sharedContent = $sharedContent;
    }
    public function getSharedContent() : ?CreativeWork
    {
        return $this->sharedContent;
    }
    public function jsonSerialize() : object
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('sharedContent' => $this->sharedContent), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

