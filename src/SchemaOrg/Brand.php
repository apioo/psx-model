<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
 * @Description("A brand is a name used by an organization or business person for labeling a product, product group, or similar.")
 */
class Brand extends Intangible
{
    /**
     * @var AggregateRating|null
     */
    protected $aggregateRating;
    /**
     * @var Review|null
     */
    protected $review;
    /**
     * @var \PSX\Uri\Uri|ImageObject|null
     */
    protected $logo;
    /**
     * @var string|null
     */
    protected $slogan;
    /**
     * @param AggregateRating|null $aggregateRating
     */
    public function setAggregateRating(?AggregateRating $aggregateRating) : void
    {
        $this->aggregateRating = $aggregateRating;
    }
    /**
     * @return AggregateRating|null
     */
    public function getAggregateRating() : ?AggregateRating
    {
        return $this->aggregateRating;
    }
    /**
     * @param Review|null $review
     */
    public function setReview(?Review $review) : void
    {
        $this->review = $review;
    }
    /**
     * @return Review|null
     */
    public function getReview() : ?Review
    {
        return $this->review;
    }
    /**
     * @param \PSX\Uri\Uri|ImageObject|null $logo
     */
    public function setLogo($logo) : void
    {
        $this->logo = $logo;
    }
    /**
     * @return \PSX\Uri\Uri|ImageObject|null
     */
    public function getLogo()
    {
        return $this->logo;
    }
    /**
     * @param string|null $slogan
     */
    public function setSlogan(?string $slogan) : void
    {
        $this->slogan = $slogan;
    }
    /**
     * @return string|null
     */
    public function getSlogan() : ?string
    {
        return $this->slogan;
    }
}
