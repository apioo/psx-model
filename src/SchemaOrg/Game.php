<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
 * @Description("The Game type represents things which are games. These are typically rule-governed recreational activities, e.g. role-playing games in which players assume the role of characters in a fictional setting.")
 */
class Game extends CreativeWork implements \JsonSerializable
{
    /**
     * @var \PSX\Uri\Uri|Place|PostalAddress|null
     */
    protected $gameLocation;
    /**
     * @var Thing|null
     */
    protected $quest;
    /**
     * @var Thing|null
     */
    protected $characterAttribute;
    /**
     * @var QuantitativeValue|null
     */
    protected $numberOfPlayers;
    /**
     * @var Thing|null
     */
    protected $gameItem;
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
    public function jsonSerialize()
    {
        return (object) array_filter(array('gameLocation' => $this->gameLocation, 'quest' => $this->quest, 'characterAttribute' => $this->characterAttribute, 'numberOfPlayers' => $this->numberOfPlayers, 'gameItem' => $this->gameItem), static function ($value) : bool {
            return $value !== null;
        });
    }
}
