<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('Server that provides game interaction in a multiplayer game.')]
class GameServer extends Intangible implements \JsonSerializable
{
    protected ?int $playersOnline = null;
    protected ?GameServerStatus $serverStatus = null;
    protected VideoGame|GameServer|null $gameServer = null;
    protected ?VideoGame $game = null;
    public function setPlayersOnline(?int $playersOnline) : void
    {
        $this->playersOnline = $playersOnline;
    }
    public function getPlayersOnline() : ?int
    {
        return $this->playersOnline;
    }
    public function setServerStatus(?GameServerStatus $serverStatus) : void
    {
        $this->serverStatus = $serverStatus;
    }
    public function getServerStatus() : ?GameServerStatus
    {
        return $this->serverStatus;
    }
    public function setGameServer(VideoGame|GameServer|null $gameServer) : void
    {
        $this->gameServer = $gameServer;
    }
    public function getGameServer() : VideoGame|GameServer|null
    {
        return $this->gameServer;
    }
    public function setGame(?VideoGame $game) : void
    {
        $this->game = $game;
    }
    public function getGame() : ?VideoGame
    {
        return $this->game;
    }
    public function jsonSerialize()
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('playersOnline' => $this->playersOnline, 'serverStatus' => $this->serverStatus, 'gameServer' => $this->gameServer, 'game' => $this->game), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

