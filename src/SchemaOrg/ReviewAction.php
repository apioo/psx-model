<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
 * @Description("The act of producing a balanced opinion about the object for an audience. An agent reviews an object with participants resulting in a review.")
 */
class ReviewAction extends AssessAction
{
    /**
     * @var Review|null
     */
    protected $resultReview;
    /**
     * @param Review|null $resultReview
     */
    public function setResultReview(?Review $resultReview) : void
    {
        $this->resultReview = $resultReview;
    }
    /**
     * @return Review|null
     */
    public function getResultReview() : ?Review
    {
        return $this->resultReview;
    }
}
