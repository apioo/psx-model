<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('An agent approves/certifies/likes/supports/sanction an object.')]
class EndorseAction extends ReactAction implements \JsonSerializable
{
    protected Person|Organization|null $endorsee = null;
    public function setEndorsee(Person|Organization|null $endorsee) : void
    {
        $this->endorsee = $endorsee;
    }
    public function getEndorsee() : Person|Organization|null
    {
        return $this->endorsee;
    }
    public function jsonSerialize()
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('endorsee' => $this->endorsee), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

