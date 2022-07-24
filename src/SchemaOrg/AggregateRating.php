<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('The average rating based on multiple ratings or reviews.')]
class AggregateRating extends Rating implements \JsonSerializable
{
    protected ?int $ratingCount = null;
    protected ?int $reviewCount = null;
    protected ?Thing $itemReviewed = null;
    public function setRatingCount(?int $ratingCount) : void
    {
        $this->ratingCount = $ratingCount;
    }
    public function getRatingCount() : ?int
    {
        return $this->ratingCount;
    }
    public function setReviewCount(?int $reviewCount) : void
    {
        $this->reviewCount = $reviewCount;
    }
    public function getReviewCount() : ?int
    {
        return $this->reviewCount;
    }
    public function setItemReviewed(?Thing $itemReviewed) : void
    {
        $this->itemReviewed = $itemReviewed;
    }
    public function getItemReviewed() : ?Thing
    {
        return $this->itemReviewed;
    }
    public function jsonSerialize() : object
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('ratingCount' => $this->ratingCount, 'reviewCount' => $this->reviewCount, 'itemReviewed' => $this->itemReviewed), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

