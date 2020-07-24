<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
 * @Description("A blog post intended to provide a rolling textual coverage of an ongoing event through continuous updates.")
 */
class LiveBlogPosting extends BlogPosting implements \JsonSerializable
{
    /**
     * @var \DateTime|null
     */
    protected $coverageStartTime;
    /**
     * @var BlogPosting|null
     */
    protected $liveBlogUpdate;
    /**
     * @var \DateTime|null
     */
    protected $coverageEndTime;
    /**
     * @param \DateTime|null $coverageStartTime
     */
    public function setCoverageStartTime(?\DateTime $coverageStartTime) : void
    {
        $this->coverageStartTime = $coverageStartTime;
    }
    /**
     * @return \DateTime|null
     */
    public function getCoverageStartTime() : ?\DateTime
    {
        return $this->coverageStartTime;
    }
    /**
     * @param BlogPosting|null $liveBlogUpdate
     */
    public function setLiveBlogUpdate(?BlogPosting $liveBlogUpdate) : void
    {
        $this->liveBlogUpdate = $liveBlogUpdate;
    }
    /**
     * @return BlogPosting|null
     */
    public function getLiveBlogUpdate() : ?BlogPosting
    {
        return $this->liveBlogUpdate;
    }
    /**
     * @param \DateTime|null $coverageEndTime
     */
    public function setCoverageEndTime(?\DateTime $coverageEndTime) : void
    {
        $this->coverageEndTime = $coverageEndTime;
    }
    /**
     * @return \DateTime|null
     */
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
