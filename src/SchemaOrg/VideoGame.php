<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
 * @Description("A video game is an electronic game that involves human interaction with a user interface to generate visual feedback on a video device.")
 */
class VideoGame extends SoftwareApplication implements \JsonSerializable
{
    /**
     * @var VideoObject|null
     */
    protected $trailer;
    /**
     * @var \PSX\Uri\Uri|string|Thing|null
     */
    protected $gamePlatform;
    /**
     * @var Person|MusicGroup|null
     */
    protected $musicBy;
    /**
     * @var Person|null
     */
    protected $actor;
    /**
     * @var CreativeWork|null
     */
    protected $gameTip;
    /**
     * @var CreativeWork|null
     */
    protected $cheatCode;
    /**
     * @var Person|null
     */
    protected $director;
    /**
     * @var GamePlayMode|null
     */
    protected $playMode;
    /**
     * @var VideoGame|GameServer|null
     */
    protected $gameServer;
    /**
     * @param VideoObject|null $trailer
     */
    public function setTrailer(?VideoObject $trailer) : void
    {
        $this->trailer = $trailer;
    }
    /**
     * @return VideoObject|null
     */
    public function getTrailer() : ?VideoObject
    {
        return $this->trailer;
    }
    /**
     * @param \PSX\Uri\Uri|string|Thing|null $gamePlatform
     */
    public function setGamePlatform($gamePlatform) : void
    {
        $this->gamePlatform = $gamePlatform;
    }
    /**
     * @return \PSX\Uri\Uri|string|Thing|null
     */
    public function getGamePlatform()
    {
        return $this->gamePlatform;
    }
    /**
     * @param Person|MusicGroup|null $musicBy
     */
    public function setMusicBy($musicBy) : void
    {
        $this->musicBy = $musicBy;
    }
    /**
     * @return Person|MusicGroup|null
     */
    public function getMusicBy()
    {
        return $this->musicBy;
    }
    /**
     * @param Person|null $actor
     */
    public function setActor(?Person $actor) : void
    {
        $this->actor = $actor;
    }
    /**
     * @return Person|null
     */
    public function getActor() : ?Person
    {
        return $this->actor;
    }
    /**
     * @param CreativeWork|null $gameTip
     */
    public function setGameTip(?CreativeWork $gameTip) : void
    {
        $this->gameTip = $gameTip;
    }
    /**
     * @return CreativeWork|null
     */
    public function getGameTip() : ?CreativeWork
    {
        return $this->gameTip;
    }
    /**
     * @param CreativeWork|null $cheatCode
     */
    public function setCheatCode(?CreativeWork $cheatCode) : void
    {
        $this->cheatCode = $cheatCode;
    }
    /**
     * @return CreativeWork|null
     */
    public function getCheatCode() : ?CreativeWork
    {
        return $this->cheatCode;
    }
    /**
     * @param Person|null $director
     */
    public function setDirector(?Person $director) : void
    {
        $this->director = $director;
    }
    /**
     * @return Person|null
     */
    public function getDirector() : ?Person
    {
        return $this->director;
    }
    /**
     * @param GamePlayMode|null $playMode
     */
    public function setPlayMode(?GamePlayMode $playMode) : void
    {
        $this->playMode = $playMode;
    }
    /**
     * @return GamePlayMode|null
     */
    public function getPlayMode() : ?GamePlayMode
    {
        return $this->playMode;
    }
    /**
     * @param VideoGame|GameServer|null $gameServer
     */
    public function setGameServer($gameServer) : void
    {
        $this->gameServer = $gameServer;
    }
    /**
     * @return VideoGame|GameServer|null
     */
    public function getGameServer()
    {
        return $this->gameServer;
    }
    public function jsonSerialize()
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('trailer' => $this->trailer, 'gamePlatform' => $this->gamePlatform, 'musicBy' => $this->musicBy, 'actor' => $this->actor, 'gameTip' => $this->gameTip, 'cheatCode' => $this->cheatCode, 'director' => $this->director, 'playMode' => $this->playMode, 'gameServer' => $this->gameServer), static function ($value) : bool {
            return $value !== null;
        }));
    }
}
