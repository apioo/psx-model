<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
 * @Description("A rating is an evaluation on a numeric scale, such as 1 to 5 stars.")
 */
class Rating extends Intangible implements \JsonSerializable
{
    /**
     * @var string|float|null
     */
    protected $worstRating;
    /**
     * @var Person|Organization|null
     */
    protected $author;
    /**
     * @var string|float|null
     */
    protected $ratingValue;
    /**
     * @var string|float|null
     */
    protected $bestRating;
    /**
     * @var string|null
     */
    protected $reviewAspect;
    /**
     * @param string|float|null $worstRating
     */
    public function setWorstRating($worstRating) : void
    {
        $this->worstRating = $worstRating;
    }
    /**
     * @return string|float|null
     */
    public function getWorstRating()
    {
        return $this->worstRating;
    }
    /**
     * @param Person|Organization|null $author
     */
    public function setAuthor($author) : void
    {
        $this->author = $author;
    }
    /**
     * @return Person|Organization|null
     */
    public function getAuthor()
    {
        return $this->author;
    }
    /**
     * @param string|float|null $ratingValue
     */
    public function setRatingValue($ratingValue) : void
    {
        $this->ratingValue = $ratingValue;
    }
    /**
     * @return string|float|null
     */
    public function getRatingValue()
    {
        return $this->ratingValue;
    }
    /**
     * @param string|float|null $bestRating
     */
    public function setBestRating($bestRating) : void
    {
        $this->bestRating = $bestRating;
    }
    /**
     * @return string|float|null
     */
    public function getBestRating()
    {
        return $this->bestRating;
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
        return array_merge(parent::jsonSerialize(), array_filter(array('worstRating' => $this->worstRating, 'author' => $this->author, 'ratingValue' => $this->ratingValue, 'bestRating' => $this->bestRating, 'reviewAspect' => $this->reviewAspect), static function ($value) : bool {
            return $value !== null;
        }));
    }
}
