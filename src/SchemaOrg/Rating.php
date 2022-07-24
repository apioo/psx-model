<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A rating is an evaluation on a numeric scale, such as 1 to 5 stars.')]
class Rating extends Intangible implements \JsonSerializable
{
    protected string|float|null $worstRating = null;
    protected Person|Organization|null $author = null;
    protected string|float|null $ratingValue = null;
    protected string|float|null $bestRating = null;
    protected ?string $reviewAspect = null;
    public function setWorstRating(string|float|null $worstRating) : void
    {
        $this->worstRating = $worstRating;
    }
    public function getWorstRating() : string|float|null
    {
        return $this->worstRating;
    }
    public function setAuthor(Person|Organization|null $author) : void
    {
        $this->author = $author;
    }
    public function getAuthor() : Person|Organization|null
    {
        return $this->author;
    }
    public function setRatingValue(string|float|null $ratingValue) : void
    {
        $this->ratingValue = $ratingValue;
    }
    public function getRatingValue() : string|float|null
    {
        return $this->ratingValue;
    }
    public function setBestRating(string|float|null $bestRating) : void
    {
        $this->bestRating = $bestRating;
    }
    public function getBestRating() : string|float|null
    {
        return $this->bestRating;
    }
    public function setReviewAspect(?string $reviewAspect) : void
    {
        $this->reviewAspect = $reviewAspect;
    }
    public function getReviewAspect() : ?string
    {
        return $this->reviewAspect;
    }
    public function jsonSerialize() : object
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('worstRating' => $this->worstRating, 'author' => $this->author, 'ratingValue' => $this->ratingValue, 'bestRating' => $this->bestRating, 'reviewAspect' => $this->reviewAspect), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

