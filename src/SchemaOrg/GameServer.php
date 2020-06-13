<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
 * @Description("Server that provides game interaction in a multiplayer game.")
 */
class GameServer extends Intangible
{
    /**
     * @var int|null
     */
    protected $playersOnline;
    /**
     * @var GameServerStatus|null
     */
    protected $serverStatus;
    /**
     * @var VideoGame|GameServer|null
     */
    protected $gameServer;
    /**
     * @var VideoGame|null
     */
    protected $game;
    /**
     * @param int|null $playersOnline
     */
    public function setPlayersOnline(?int $playersOnline) : void
    {
        $this->playersOnline = $playersOnline;
    }
    /**
     * @return int|null
     */
    public function getPlayersOnline() : ?int
    {
        return $this->playersOnline;
    }
    /**
     * @param GameServerStatus|null $serverStatus
     */
    public function setServerStatus(?GameServerStatus $serverStatus) : void
    {
        $this->serverStatus = $serverStatus;
    }
    /**
     * @return GameServerStatus|null
     */
    public function getServerStatus() : ?GameServerStatus
    {
        return $this->serverStatus;
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
    /**
     * @param VideoGame|null $game
     */
    public function setGame(?VideoGame $game) : void
    {
        $this->game = $game;
    }
    /**
     * @return VideoGame|null
     */
    public function getGame() : ?VideoGame
    {
        return $this->game;
    }
}
