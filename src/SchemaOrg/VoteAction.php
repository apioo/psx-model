<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('The act of expressing a preference from a fixed/finite/structured set of choices/options.')]
class VoteAction extends ChooseAction implements \JsonSerializable
{
    protected ?Person $candidate = null;
    public function setCandidate(?Person $candidate) : void
    {
        $this->candidate = $candidate;
    }
    public function getCandidate() : ?Person
    {
        return $this->candidate;
    }
    public function jsonSerialize() : object
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('candidate' => $this->candidate), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

