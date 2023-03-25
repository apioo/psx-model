<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A blog post intended to provide a rolling textual coverage of an ongoing event through continuous updates.')]
class LiveBlogPosting extends BlogPosting implements \JsonSerializable
{
    protected ?\PSX\DateTime\LocalDateTime $coverageStartTime = null;
    protected ?BlogPosting $liveBlogUpdate = null;
    protected ?\PSX\DateTime\LocalDateTime $coverageEndTime = null;
    public function setCoverageStartTime(?\PSX\DateTime\LocalDateTime $coverageStartTime) : void
    {
        $this->coverageStartTime = $coverageStartTime;
    }
    public function getCoverageStartTime() : ?\PSX\DateTime\LocalDateTime
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
    public function setCoverageEndTime(?\PSX\DateTime\LocalDateTime $coverageEndTime) : void
    {
        $this->coverageEndTime = $coverageEndTime;
    }
    public function getCoverageEndTime() : ?\PSX\DateTime\LocalDateTime
    {
        return $this->coverageEndTime;
    }
    public function jsonSerialize() : object
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('coverageStartTime' => $this->coverageStartTime, 'liveBlogUpdate' => $this->liveBlogUpdate, 'coverageEndTime' => $this->coverageEndTime), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

