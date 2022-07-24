<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('An audio file.')]
class AudioObject extends MediaObject implements \JsonSerializable
{
    protected string|MediaObject|null $caption = null;
    protected ?string $transcript = null;
    public function setCaption(string|MediaObject|null $caption) : void
    {
        $this->caption = $caption;
    }
    public function getCaption() : string|MediaObject|null
    {
        return $this->caption;
    }
    public function setTranscript(?string $transcript) : void
    {
        $this->transcript = $transcript;
    }
    public function getTranscript() : ?string
    {
        return $this->transcript;
    }
    public function jsonSerialize() : object
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('caption' => $this->caption, 'transcript' => $this->transcript), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

