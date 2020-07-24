<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
 * @Description("A musical composition.")
 */
class MusicComposition extends CreativeWork implements \JsonSerializable
{
    /**
     * @var string|null
     */
    protected $iswcCode;
    /**
     * @var MusicComposition|null
     */
    protected $includedComposition;
    /**
     * @var Person|null
     */
    protected $lyricist;
    /**
     * @var MusicComposition|null
     */
    protected $musicArrangement;
    /**
     * @var Event|null
     */
    protected $firstPerformance;
    /**
     * @var CreativeWork|null
     */
    protected $lyrics;
    /**
     * @var Organization|Person|null
     */
    protected $composer;
    /**
     * @var string|null
     */
    protected $musicalKey;
    /**
     * @var string|null
     */
    protected $musicCompositionForm;
    /**
     * @var MusicComposition|MusicRecording|null
     */
    protected $recordingOf;
    /**
     * @param string|null $iswcCode
     */
    public function setIswcCode(?string $iswcCode) : void
    {
        $this->iswcCode = $iswcCode;
    }
    /**
     * @return string|null
     */
    public function getIswcCode() : ?string
    {
        return $this->iswcCode;
    }
    /**
     * @param MusicComposition|null $includedComposition
     */
    public function setIncludedComposition(?MusicComposition $includedComposition) : void
    {
        $this->includedComposition = $includedComposition;
    }
    /**
     * @return MusicComposition|null
     */
    public function getIncludedComposition() : ?MusicComposition
    {
        return $this->includedComposition;
    }
    /**
     * @param Person|null $lyricist
     */
    public function setLyricist(?Person $lyricist) : void
    {
        $this->lyricist = $lyricist;
    }
    /**
     * @return Person|null
     */
    public function getLyricist() : ?Person
    {
        return $this->lyricist;
    }
    /**
     * @param MusicComposition|null $musicArrangement
     */
    public function setMusicArrangement(?MusicComposition $musicArrangement) : void
    {
        $this->musicArrangement = $musicArrangement;
    }
    /**
     * @return MusicComposition|null
     */
    public function getMusicArrangement() : ?MusicComposition
    {
        return $this->musicArrangement;
    }
    /**
     * @param Event|null $firstPerformance
     */
    public function setFirstPerformance(?Event $firstPerformance) : void
    {
        $this->firstPerformance = $firstPerformance;
    }
    /**
     * @return Event|null
     */
    public function getFirstPerformance() : ?Event
    {
        return $this->firstPerformance;
    }
    /**
     * @param CreativeWork|null $lyrics
     */
    public function setLyrics(?CreativeWork $lyrics) : void
    {
        $this->lyrics = $lyrics;
    }
    /**
     * @return CreativeWork|null
     */
    public function getLyrics() : ?CreativeWork
    {
        return $this->lyrics;
    }
    /**
     * @param Organization|Person|null $composer
     */
    public function setComposer($composer) : void
    {
        $this->composer = $composer;
    }
    /**
     * @return Organization|Person|null
     */
    public function getComposer()
    {
        return $this->composer;
    }
    /**
     * @param string|null $musicalKey
     */
    public function setMusicalKey(?string $musicalKey) : void
    {
        $this->musicalKey = $musicalKey;
    }
    /**
     * @return string|null
     */
    public function getMusicalKey() : ?string
    {
        return $this->musicalKey;
    }
    /**
     * @param string|null $musicCompositionForm
     */
    public function setMusicCompositionForm(?string $musicCompositionForm) : void
    {
        $this->musicCompositionForm = $musicCompositionForm;
    }
    /**
     * @return string|null
     */
    public function getMusicCompositionForm() : ?string
    {
        return $this->musicCompositionForm;
    }
    /**
     * @param MusicComposition|MusicRecording|null $recordingOf
     */
    public function setRecordingOf($recordingOf) : void
    {
        $this->recordingOf = $recordingOf;
    }
    /**
     * @return MusicComposition|MusicRecording|null
     */
    public function getRecordingOf()
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
