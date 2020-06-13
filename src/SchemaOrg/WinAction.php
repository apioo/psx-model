<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
 * @Description("The act of achieving victory in a competitive activity.")
 */
class WinAction extends AchieveAction
{
    /**
     * @var Person|null
     */
    protected $loser;
    /**
     * @param Person|null $loser
     */
    public function setLoser(?Person $loser) : void
    {
        $this->loser = $loser;
    }
    /**
     * @return Person|null
     */
    public function getLoser() : ?Person
    {
        return $this->loser;
    }
}
