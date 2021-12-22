<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A blog post intended to provide a rolling textual coverage of an ongoing event through continuous updates.')]
class LiveBlogPosting extends BlogPosting implements \JsonSerializable
{
    protected ?\DateTime $coverageStartTime = null;
    protected ?BlogPosting $liveBlogUpdate = null;
    protected ?\DateTime $coverageEndTime = null;
    public function setCoverageStartTime(?\DateTime $coverageStartTime) : void
    {
        $this->coverageStartTime = $coverageStartTime;
    }
    public function getCoverageStartTime() : ?\DateTime
    {
        return $this->coverageStartTime;
    }
    public function setLiveBlogUpdate(?BlogPosting $liveBlogUpdate) : void
    {
        $this->liveBlogUpdate = $liveBlogUpdate;
    }
    public function getLiveBlogUpdate() : ?BlogPosting
    {
        return $this->liveBlogUpdate;
    }
    public function setCoverageEndTime(?\DateTime $coverageEndTime) : void
    {
        $this->coverageEndTime = $coverageEndTime;
    }
    public function getCoverageEndTime() : ?\DateTime
    {
        return $this->coverageEndTime;
    }
    public function jsonSerialize()
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('coverageStartTime' => $this->coverageStartTime, 'liveBlogUpdate' => $this->liveBlogUpdate, 'coverageEndTime' => $this->coverageEndTime), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

