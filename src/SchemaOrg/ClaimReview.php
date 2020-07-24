<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
 * @Description("A fact-checking review of claims made (or reported) in some creative work (referenced via itemReviewed).")
 */
class ClaimReview extends Review implements \JsonSerializable
{
    /**
     * @var string|null
     */
    protected $claimReviewed;
    /**
     * @param string|null $claimReviewed
     */
    public function setClaimReviewed(?string $claimReviewed) : void
    {
        $this->claimReviewed = $claimReviewed;
    }
    /**
     * @return string|null
     */
    public function getClaimReviewed() : ?string
    {
        return $this->claimReviewed;
    }
    public function jsonSerialize()
    {
        return array_merge(parent::jsonSerialize(), array_filter(array('claimReviewed' => $this->claimReviewed), static function ($value) : bool {
            return $value !== null;
        }));
    }
}
