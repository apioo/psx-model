<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
 * @Description("The average rating based on multiple ratings or reviews.")
 */
class AggregateRating extends Rating implements \JsonSerializable
{
    /**
     * @var int|null
     */
    protected $ratingCount;
    /**
     * @var int|null
     */
    protected $reviewCount;
    /**
     * @var Thing|null
     */
    protected $itemReviewed;
    /**
     * @param int|null $ratingCount
     */
    public function setRatingCount(?int $ratingCount) : void
    {
        $this->ratingCount = $ratingCount;
    }
    /**
     * @return int|null
     */
    public function getRatingCount() : ?int
    {
        return $this->ratingCount;
    }
    /**
     * @param int|null $reviewCount
     */
    public function setReviewCount(?int $reviewCount) : void
    {
        $this->reviewCount = $reviewCount;
    }
    /**
     * @return int|null
     */
    public function getReviewCount() : ?int
    {
        return $this->reviewCount;
    }
    /**
     * @param Thing|null $itemReviewed
     */
    public function setItemReviewed(?Thing $itemReviewed) : void
    {
        $this->itemReviewed = $itemReviewed;
    }
    /**
     * @return Thing|null
     */
    public function getItemReviewed() : ?Thing
    {
        return $this->itemReviewed;
    }
    public function jsonSerialize()
    {
        return (object) array_filter(array('ratingCount' => $this->ratingCount, 'reviewCount' => $this->reviewCount, 'itemReviewed' => $this->itemReviewed), static function ($value) : bool {
            return $value !== null;
        });
    }
}
