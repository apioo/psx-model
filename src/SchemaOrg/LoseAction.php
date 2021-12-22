<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('The act of being defeated in a competitive activity.')]
class LoseAction extends AchieveAction implements \JsonSerializable
{
    protected ?Person $winner = null;
    public function setWinner(?Person $winner) : void
    {
        $this->winner = $winner;
    }
    public function getWinner() : ?Person
    {
        return $this->winner;
    }
    public function jsonSerialize()
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('winner' => $this->winner), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

