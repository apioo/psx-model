<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
 * @Description("The act of being defeated in a competitive activity.")
 */
class LoseAction extends AchieveAction implements \JsonSerializable
{
    /**
     * @var Person|null
     */
    protected $winner;
    /**
     * @param Person|null $winner
     */
    public function setWinner(?Person $winner) : void
    {
        $this->winner = $winner;
    }
    /**
     * @return Person|null
     */
    public function getWinner() : ?Person
    {
        return $this->winner;
    }
    public function jsonSerialize()
    {
        return (object) array_filter(array('winner' => $this->winner), static function ($value) : bool {
            return $value !== null;
        });
    }
}
