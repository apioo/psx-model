<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
 * @Description("The act of being defeated in a competitive activity.")
 */
class LoseAction extends AchieveAction
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
}
