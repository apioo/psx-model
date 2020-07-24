<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
 * @Description("A review of an item - for example, of a restaurant, movie, or store.")
 */
class Review extends CreativeWork implements \JsonSerializable
{
    /**
     * @var Thing|null
     */
    protected $itemReviewed;
    /**
     * @var string|null
     */
    protected $reviewBody;
    /**
     * @var Rating|null
     */
    protected $reviewRating;
    /**
     * @var string|null
     */
    protected $reviewAspect;
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
    /**
     * @param string|null $reviewBody
     */
    public function setReviewBody(?string $reviewBody) : void
    {
        $this->reviewBody = $reviewBody;
    }
    /**
     * @return string|null
     */
    public function getReviewBody() : ?string
    {
        return $this->reviewBody;
    }
    /**
     * @param Rating|null $reviewRating
     */
    public function setReviewRating(?Rating $reviewRating) : void
    {
        $this->reviewRating = $reviewRating;
    }
    /**
     * @return Rating|null
     */
    public function getReviewRating() : ?Rating
    {
        return $this->reviewRating;
    }
    /**
     * @param string|null $reviewAspect
     */
    public function setReviewAspect(?string $reviewAspect) : void
    {
        $this->reviewAspect = $reviewAspect;
    }
    /**
     * @return string|null
     */
    public function getReviewAspect() : ?string
    {
        return $this->reviewAspect;
    }
    public function jsonSerialize()
    {
        return array_merge(parent::jsonSerialize(), array_filter(array('itemReviewed' => $this->itemReviewed, 'reviewBody' => $this->reviewBody, 'reviewRating' => $this->reviewRating, 'reviewAspect' => $this->reviewAspect), static function ($value) : bool {
            return $value !== null;
        }));
    }
}
