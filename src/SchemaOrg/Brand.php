<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A brand is a name used by an organization or business person for labeling a product, product group, or similar.')]
class Brand extends Intangible implements \JsonSerializable
{
    protected ?AggregateRating $aggregateRating = null;
    protected ?Review $review = null;
    protected \PSX\Uri\Uri|ImageObject|null $logo = null;
    protected ?string $slogan = null;
    public function setAggregateRating(?AggregateRating $aggregateRating) : void
    {
        $this->aggregateRating = $aggregateRating;
    }
    public function getAggregateRating() : ?AggregateRating
    {
        return $this->aggregateRating;
    }
    public function setReview(?Review $review) : void
    {
        $this->review = $review;
    }
    public function getReview() : ?Review
    {
        return $this->review;
    }
    public function setLogo(\PSX\Uri\Uri|ImageObject|null $logo) : void
    {
        $this->logo = $logo;
    }
    public function getLogo() : \PSX\Uri\Uri|ImageObject|null
    {
        return $this->logo;
    }
    public function setSlogan(?string $slogan) : void
    {
        $this->slogan = $slogan;
    }
    public function getSlogan() : ?string
    {
        return $this->slogan;
    }
    public function jsonSerialize() : object
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('aggregateRating' => $this->aggregateRating, 'review' => $this->review, 'logo' => $this->logo, 'slogan' => $this->slogan), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

