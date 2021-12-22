<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('The Game type represents things which are games. These are typically rule-governed recreational activities, e.g. role-playing games in which players assume the role of characters in a fictional setting.')]
class Game extends CreativeWork implements \JsonSerializable
{
    protected \PSX\Uri\Uri|Place|PostalAddress|null $gameLocation = null;
    protected ?Thing $quest = null;
    protected ?Thing $characterAttribute = null;
    protected ?QuantitativeValue $numberOfPlayers = null;
    protected ?Thing $gameItem = null;
    public function setGameLocation(\PSX\Uri\Uri|Place|PostalAddress|null $gameLocation) : void
    {
        $this->gameLocation = $gameLocation;
    }
    public function getGameLocation() : \PSX\Uri\Uri|Place|PostalAddress|null
    {
        return $this->gameLocation;
    }
    public function setQuest(?Thing $quest) : void
    {
        $this->quest = $quest;
    }
    public function getQuest() : ?Thing
    {
        return $this->quest;
    }
    public function setCharacterAttribute(?Thing $characterAttribute) : void
    {
        $this->characterAttribute = $characterAttribute;
    }
    public function getCharacterAttribute() : ?Thing
    {
        return $this->characterAttribute;
    }
    public function setNumberOfPlayers(?QuantitativeValue $numberOfPlayers) : void
    {
        $this->numberOfPlayers = $numberOfPlayers;
    }
    public function getNumberOfPlayers() : ?QuantitativeValue
    {
        return $this->numberOfPlayers;
    }
    public function setGameItem(?Thing $gameItem) : void
    {
        $this->gameItem = $gameItem;
    }
    public function getGameItem() : ?Thing
    {
        return $this->gameItem;
    }
    public function jsonSerialize()
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('gameLocation' => $this->gameLocation, 'quest' => $this->quest, 'characterAttribute' => $this->characterAttribute, 'numberOfPlayers' => $this->numberOfPlayers, 'gameItem' => $this->gameItem), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

