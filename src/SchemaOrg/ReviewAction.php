<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('The act of producing a balanced opinion about the object for an audience. An agent reviews an object with participants resulting in a review.')]
class ReviewAction extends AssessAction implements \JsonSerializable
{
    protected ?Review $resultReview = null;
    public function setResultReview(?Review $resultReview) : void
    {
        $this->resultReview = $resultReview;
    }
    public function getResultReview() : ?Review
    {
        return $this->resultReview;
    }
    public function jsonSerialize() : object
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('resultReview' => $this->resultReview), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

