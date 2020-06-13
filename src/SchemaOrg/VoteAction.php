<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
 * @Description("The act of expressing a preference from a fixed/finite/structured set of choices/options.")
 */
class VoteAction extends ChooseAction
{
    /**
     * @var Person|null
     */
    protected $candidate;
    /**
     * @param Person|null $candidate
     */
    public function setCandidate(?Person $candidate) : void
    {
        $this->candidate = $candidate;
    }
    /**
     * @return Person|null
     */
    public function getCandidate() : ?Person
    {
        return $this->candidate;
    }
}
