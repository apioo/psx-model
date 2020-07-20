<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
 * @Description("A video game series.")
 */
class VideoGameSeries extends CreativeWorkSeries implements \JsonSerializable
{
    /**
     * @var VideoObject|null
     */
    protected $trailer;
    /**
     * @var \PSX\Uri\Uri|Place|PostalAddress|null
     */
    protected $gameLocation;
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
     * @var Thing|null
     */
    protected $quest;
    /**
     * @var Organization|null
     */
    protected $productionCompany;
    /**
     * @var Thing|null
     */
    protected $characterAttribute;
    /**
     * @var Episode|null
     */
    protected $episode;
    /**
     * @var QuantitativeValue|null
     */
    protected $numberOfPlayers;
    /**
     * @var CreativeWork|null
     */
    protected $cheatCode;
    /**
     * @var Person|null
     */
    protected $director;
    /**
     * @var int|null
     */
    protected $numberOfEpisodes;
    /**
     * @var Thing|null
     */
    protected $gameItem;
    /**
     * @var int|null
     */
    protected $numberOfSeasons;
    /**
     * @var GamePlayMode|null
     */
    protected $playMode;
    /**
     * @var CreativeWork|null
     */
    protected $containsSeason;
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
     * @param \PSX\Uri\Uri|Place|PostalAddress|null $gameLocation
     */
    public function setGameLocation($gameLocation) : void
    {
        $this->gameLocation = $gameLocation;
    }
    /**
     * @return \PSX\Uri\Uri|Place|PostalAddress|null
     */
    public function getGameLocation()
    {
        return $this->gameLocation;
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
     * @param Thing|null $quest
     */
    public function setQuest(?Thing $quest) : void
    {
        $this->quest = $quest;
    }
    /**
     * @return Thing|null
     */
    public function getQuest() : ?Thing
    {
        return $this->quest;
    }
    /**
     * @param Organization|null $productionCompany
     */
    public function setProductionCompany(?Organization $productionCompany) : void
    {
        $this->productionCompany = $productionCompany;
    }
    /**
     * @return Organization|null
     */
    public function getProductionCompany() : ?Organization
    {
        return $this->productionCompany;
    }
    /**
     * @param Thing|null $characterAttribute
     */
    public function setCharacterAttribute(?Thing $characterAttribute) : void
    {
        $this->characterAttribute = $characterAttribute;
    }
    /**
     * @return Thing|null
     */
    public function getCharacterAttribute() : ?Thing
    {
        return $this->characterAttribute;
    }
    /**
     * @param Episode|null $episode
     */
    public function setEpisode(?Episode $episode) : void
    {
        $this->episode = $episode;
    }
    /**
     * @return Episode|null
     */
    public function getEpisode() : ?Episode
    {
        return $this->episode;
    }
    /**
     * @param QuantitativeValue|null $numberOfPlayers
     */
    public function setNumberOfPlayers(?QuantitativeValue $numberOfPlayers) : void
    {
        $this->numberOfPlayers = $numberOfPlayers;
    }
    /**
     * @return QuantitativeValue|null
     */
    public function getNumberOfPlayers() : ?QuantitativeValue
    {
        return $this->numberOfPlayers;
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
     * @param int|null $numberOfEpisodes
     */
    public function setNumberOfEpisodes(?int $numberOfEpisodes) : void
    {
        $this->numberOfEpisodes = $numberOfEpisodes;
    }
    /**
     * @return int|null
     */
    public function getNumberOfEpisodes() : ?int
    {
        return $this->numberOfEpisodes;
    }
    /**
     * @param Thing|null $gameItem
     */
    public function setGameItem(?Thing $gameItem) : void
    {
        $this->gameItem = $gameItem;
    }
    /**
     * @return Thing|null
     */
    public function getGameItem() : ?Thing
    {
        return $this->gameItem;
    }
    /**
     * @param int|null $numberOfSeasons
     */
    public function setNumberOfSeasons(?int $numberOfSeasons) : void
    {
        $this->numberOfSeasons = $numberOfSeasons;
    }
    /**
     * @return int|null
     */
    public function getNumberOfSeasons() : ?int
    {
        return $this->numberOfSeasons;
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
     * @param CreativeWork|null $containsSeason
     */
    public function setContainsSeason(?CreativeWork $containsSeason) : void
    {
        $this->containsSeason = $containsSeason;
    }
    /**
     * @return CreativeWork|null
     */
    public function getContainsSeason() : ?CreativeWork
    {
        return $this->containsSeason;
    }
    public function jsonSerialize()
    {
        return (object) array_filter(array('trailer' => $this->trailer, 'gameLocation' => $this->gameLocation, 'gamePlatform' => $this->gamePlatform, 'musicBy' => $this->musicBy, 'actor' => $this->actor, 'quest' => $this->quest, 'productionCompany' => $this->productionCompany, 'characterAttribute' => $this->characterAttribute, 'episode' => $this->episode, 'numberOfPlayers' => $this->numberOfPlayers, 'cheatCode' => $this->cheatCode, 'director' => $this->director, 'numberOfEpisodes' => $this->numberOfEpisodes, 'gameItem' => $this->gameItem, 'numberOfSeasons' => $this->numberOfSeasons, 'playMode' => $this->playMode, 'containsSeason' => $this->containsSeason), static function ($value) : bool {
            return $value !== null;
        });
    }
}
