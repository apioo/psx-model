<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A musical composition.')]
class MusicComposition extends CreativeWork implements \JsonSerializable
{
    protected ?string $iswcCode = null;
    protected ?MusicComposition $includedComposition = null;
    protected ?Person $lyricist = null;
    protected ?MusicComposition $musicArrangement = null;
    protected ?Event $firstPerformance = null;
    protected ?CreativeWork $lyrics = null;
    protected Organization|Person|null $composer = null;
    protected ?string $musicalKey = null;
    protected ?string $musicCompositionForm = null;
    protected MusicComposition|MusicRecording|null $recordingOf = null;
    public function setIswcCode(?string $iswcCode) : void
    {
        $this->iswcCode = $iswcCode;
    }
    public function getIswcCode() : ?string
    {
        return $this->iswcCode;
    }
    public function setIncludedComposition(?MusicComposition $includedComposition) : void
    {
        $this->includedComposition = $includedComposition;
    }
    public function getIncludedComposition() : ?MusicComposition
    {
        return $this->includedComposition;
    }
    public function setLyricist(?Person $lyricist) : void
    {
        $this->lyricist = $lyricist;
    }
    public function getLyricist() : ?Person
    {
        return $this->lyricist;
    }
    public function setMusicArrangement(?MusicComposition $musicArrangement) : void
    {
        $this->musicArrangement = $musicArrangement;
    }
    public function getMusicArrangement() : ?MusicComposition
    {
        return $this->musicArrangement;
    }
    public function setFirstPerformance(?Event $firstPerformance) : void
    {
        $this->firstPerformance = $firstPerformance;
    }
    public function getFirstPerformance() : ?Event
    {
        return $this->firstPerformance;
    }
    public function setLyrics(?CreativeWork $lyrics) : void
    {
        $this->lyrics = $lyrics;
    }
    public function getLyrics() : ?CreativeWork
    {
        return $this->lyrics;
    }
    public function setComposer(Organization|Person|null $composer) : void
    {
        $this->composer = $composer;
    }
    public function getComposer() : Organization|Person|null
    {
        return $this->composer;
    }
    public function setMusicalKey(?string $musicalKey) : void
    {
        $this->musicalKey = $musicalKey;
    }
    public function getMusicalKey() : ?string
    {
        return $this->musicalKey;
    }
    public function setMusicCompositionForm(?string $musicCompositionForm) : void
    {
        $this->musicCompositionForm = $musicCompositionForm;
    }
    public function getMusicCompositionForm() : ?string
    {
        return $this->musicCompositionForm;
    }
    public function setRecordingOf(MusicComposition|MusicRecording|null $recordingOf) : void
    {
        $this->recordingOf = $recordingOf;
    }
    public function getRecordingOf() : MusicComposition|MusicRecording|null
    {
        return $this->recordingOf;
    }
    public function jsonSerialize()
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('iswcCode' => $this->iswcCode, 'includedComposition' => $this->includedComposition, 'lyricist' => $this->lyricist, 'musicArrangement' => $this->musicArrangement, 'firstPerformance' => $this->firstPerformance, 'lyrics' => $this->lyrics, 'composer' => $this->composer, 'musicalKey' => $this->musicalKey, 'musicCompositionForm' => $this->musicCompositionForm, 'recordingOf' => $this->recordingOf), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

