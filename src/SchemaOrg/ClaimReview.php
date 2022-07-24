<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A fact-checking review of claims made (or reported) in some creative work (referenced via itemReviewed).')]
class ClaimReview extends Review implements \JsonSerializable
{
    protected ?string $claimReviewed = null;
    public function setClaimReviewed(?string $claimReviewed) : void
    {
        $this->claimReviewed = $claimReviewed;
    }
    public function getClaimReviewed() : ?string
    {
        return $this->claimReviewed;
    }
    public function jsonSerialize() : object
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('claimReviewed' => $this->claimReviewed), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

