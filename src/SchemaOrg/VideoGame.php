<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A video game is an electronic game that involves human interaction with a user interface to generate visual feedback on a video device.')]
class VideoGame extends SoftwareApplication implements \JsonSerializable
{
    protected ?VideoObject $trailer = null;
    protected \PSX\Uri\Uri|string|Thing|null $gamePlatform = null;
    protected Person|MusicGroup|null $musicBy = null;
    protected ?Person $actor = null;
    protected ?CreativeWork $gameTip = null;
    protected ?CreativeWork $cheatCode = null;
    protected ?Person $director = null;
    protected ?GamePlayMode $playMode = null;
    protected VideoGame|GameServer|null $gameServer = null;
    public function setTrailer(?VideoObject $trailer) : void
    {
        $this->trailer = $trailer;
    }
    public function getTrailer() : ?VideoObject
    {
        return $this->trailer;
    }
    public function setGamePlatform(\PSX\Uri\Uri|string|Thing|null $gamePlatform) : void
    {
        $this->gamePlatform = $gamePlatform;
    }
    public function getGamePlatform() : \PSX\Uri\Uri|string|Thing|null
    {
        return $this->gamePlatform;
    }
    public function setMusicBy(Person|MusicGroup|null $musicBy) : void
    {
        $this->musicBy = $musicBy;
    }
    public function getMusicBy() : Person|MusicGroup|null
    {
        return $this->musicBy;
    }
    public function setActor(?Person $actor) : void
    {
        $this->actor = $actor;
    }
    public function getActor() : ?Person
    {
        return $this->actor;
    }
    public function setGameTip(?CreativeWork $gameTip) : void
    {
        $this->gameTip = $gameTip;
    }
    public function getGameTip() : ?CreativeWork
    {
        return $this->gameTip;
    }
    public function setCheatCode(?CreativeWork $cheatCode) : void
    {
        $this->cheatCode = $cheatCode;
    }
    public function getCheatCode() : ?CreativeWork
    {
        return $this->cheatCode;
    }
    public function setDirector(?Person $director) : void
    {
        $this->director = $director;
    }
    public function getDirector() : ?Person
    {
        return $this->director;
    }
    public function setPlayMode(?GamePlayMode $playMode) : void
    {
        $this->playMode = $playMode;
    }
    public function getPlayMode() : ?GamePlayMode
    {
        return $this->playMode;
    }
    public function setGameServer(VideoGame|GameServer|null $gameServer) : void
    {
        $this->gameServer = $gameServer;
    }
    public function getGameServer() : VideoGame|GameServer|null
    {
        return $this->gameServer;
    }
    public function jsonSerialize() : object
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('trailer' => $this->trailer, 'gamePlatform' => $this->gamePlatform, 'musicBy' => $this->musicBy, 'actor' => $this->actor, 'gameTip' => $this->gameTip, 'cheatCode' => $this->cheatCode, 'director' => $this->director, 'playMode' => $this->playMode, 'gameServer' => $this->gameServer), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

