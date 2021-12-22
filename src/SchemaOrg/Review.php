<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A review of an item - for example, of a restaurant, movie, or store.')]
class Review extends CreativeWork implements \JsonSerializable
{
    protected ?Thing $itemReviewed = null;
    protected ?string $reviewBody = null;
    protected ?Rating $reviewRating = null;
    protected ?string $reviewAspect = null;
    public function setItemReviewed(?Thing $itemReviewed) : void
    {
        $this->itemReviewed = $itemReviewed;
    }
    public function getItemReviewed() : ?Thing
    {
        return $this->itemReviewed;
    }
    public function setReviewBody(?string $reviewBody) : void
    {
        $this->reviewBody = $reviewBody;
    }
    public function getReviewBody() : ?string
    {
        return $this->reviewBody;
    }
    public function setReviewRating(?Rating $reviewRating) : void
    {
        $this->reviewRating = $reviewRating;
    }
    public function getReviewRating() : ?Rating
    {
        return $this->reviewRating;
    }
    public function setReviewAspect(?string $reviewAspect) : void
    {
        $this->reviewAspect = $reviewAspect;
    }
    public function getReviewAspect() : ?string
    {
        return $this->reviewAspect;
    }
    public function jsonSerialize()
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('itemReviewed' => $this->itemReviewed, 'reviewBody' => $this->reviewBody, 'reviewRating' => $this->reviewRating, 'reviewAspect' => $this->reviewAspect), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

