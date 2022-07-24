<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A video game series.')]
class VideoGameSeries extends CreativeWorkSeries implements \JsonSerializable
{
    protected ?VideoObject $trailer = null;
    protected \PSX\Uri\Uri|Place|PostalAddress|null $gameLocation = null;
    protected \PSX\Uri\Uri|string|Thing|null $gamePlatform = null;
    protected Person|MusicGroup|null $musicBy = null;
    protected ?Person $actor = null;
    protected ?Thing $quest = null;
    protected ?Organization $productionCompany = null;
    protected ?Thing $characterAttribute = null;
    protected ?Episode $episode = null;
    protected ?QuantitativeValue $numberOfPlayers = null;
    protected ?CreativeWork $cheatCode = null;
    protected ?Person $director = null;
    protected ?int $numberOfEpisodes = null;
    protected ?Thing $gameItem = null;
    protected ?int $numberOfSeasons = null;
    protected ?GamePlayMode $playMode = null;
    protected ?CreativeWork $containsSeason = null;
    public function setTrailer(?VideoObject $trailer) : void
    {
        $this->trailer = $trailer;
    }
    public function getTrailer() : ?VideoObject
    {
        return $this->trailer;
    }
    public function setGameLocation(\PSX\Uri\Uri|Place|PostalAddress|null $gameLocation) : void
    {
        $this->gameLocation = $gameLocation;
    }
    public function getGameLocation() : \PSX\Uri\Uri|Place|PostalAddress|null
    {
        return $this->gameLocation;
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
    public function setQuest(?Thing $quest) : void
    {
        $this->quest = $quest;
    }
    public function getQuest() : ?Thing
    {
        return $this->quest;
    }
    public function setProductionCompany(?Organization $productionCompany) : void
    {
        $this->productionCompany = $productionCompany;
    }
    public function getProductionCompany() : ?Organization
    {
        return $this->productionCompany;
    }
    public function setCharacterAttribute(?Thing $characterAttribute) : void
    {
        $this->characterAttribute = $characterAttribute;
    }
    public function getCharacterAttribute() : ?Thing
    {
        return $this->characterAttribute;
    }
    public function setEpisode(?Episode $episode) : void
    {
        $this->episode = $episode;
    }
    public function getEpisode() : ?Episode
    {
        return $this->episode;
    }
    public function setNumberOfPlayers(?QuantitativeValue $numberOfPlayers) : void
    {
        $this->numberOfPlayers = $numberOfPlayers;
    }
    public function getNumberOfPlayers() : ?QuantitativeValue
    {
        return $this->numberOfPlayers;
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
    public function setNumberOfEpisodes(?int $numberOfEpisodes) : void
    {
        $this->numberOfEpisodes = $numberOfEpisodes;
    }
    public function getNumberOfEpisodes() : ?int
    {
        return $this->numberOfEpisodes;
    }
    public function setGameItem(?Thing $gameItem) : void
    {
        $this->gameItem = $gameItem;
    }
    public function getGameItem() : ?Thing
    {
        return $this->gameItem;
    }
    public function setNumberOfSeasons(?int $numberOfSeasons) : void
    {
        $this->numberOfSeasons = $numberOfSeasons;
    }
    public function getNumberOfSeasons() : ?int
    {
        return $this->numberOfSeasons;
    }
    public function setPlayMode(?GamePlayMode $playMode) : void
    {
        $this->playMode = $playMode;
    }
    public function getPlayMode() : ?GamePlayMode
    {
        return $this->playMode;
    }
    public function setContainsSeason(?CreativeWork $containsSeason) : void
    {
        $this->containsSeason = $containsSeason;
    }
    public function getContainsSeason() : ?CreativeWork
    {
        return $this->containsSeason;
    }
    public function jsonSerialize() : object
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('trailer' => $this->trailer, 'gameLocation' => $this->gameLocation, 'gamePlatform' => $this->gamePlatform, 'musicBy' => $this->musicBy, 'actor' => $this->actor, 'quest' => $this->quest, 'productionCompany' => $this->productionCompany, 'characterAttribute' => $this->characterAttribute, 'episode' => $this->episode, 'numberOfPlayers' => $this->numberOfPlayers, 'cheatCode' => $this->cheatCode, 'director' => $this->director, 'numberOfEpisodes' => $this->numberOfEpisodes, 'gameItem' => $this->gameItem, 'numberOfSeasons' => $this->numberOfSeasons, 'playMode' => $this->playMode, 'containsSeason' => $this->containsSeason), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

