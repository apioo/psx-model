<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('The act of achieving victory in a competitive activity.')]
class WinAction extends AchieveAction implements \JsonSerializable
{
    protected ?Person $loser = null;
    public function setLoser(?Person $loser) : void
    {
        $this->loser = $loser;
    }
    public function getLoser() : ?Person
    {
        return $this->loser;
    }
    public function jsonSerialize() : object
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('loser' => $this->loser), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

