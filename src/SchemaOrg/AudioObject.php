<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
 * @Description("An audio file.")
 */
class AudioObject extends MediaObject implements \JsonSerializable
{
    /**
     * @var string|MediaObject|null
     */
    protected $caption;
    /**
     * @var string|null
     */
    protected $transcript;
    /**
     * @param string|MediaObject|null $caption
     */
    public function setCaption($caption) : void
    {
        $this->caption = $caption;
    }
    /**
     * @return string|MediaObject|null
     */
    public function getCaption()
    {
        return $this->caption;
    }
    /**
     * @param string|null $transcript
     */
    public function setTranscript(?string $transcript) : void
    {
        $this->transcript = $transcript;
    }
    /**
     * @return string|null
     */
    public function getTranscript() : ?string
    {
        return $this->transcript;
    }
    public function jsonSerialize()
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('caption' => $this->caption, 'transcript' => $this->transcript), static function ($value) : bool {
            return $value !== null;
        }));
    }
}
