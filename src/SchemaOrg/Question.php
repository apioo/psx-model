<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A specific question - e.g. from a user seeking answers online, or collected in a Frequently Asked Questions (FAQ) document.')]
class Question extends CreativeWork implements \JsonSerializable
{
    protected ?int $upvoteCount = null;
    protected ItemList|Answer|null $suggestedAnswer = null;
    protected ?int $downvoteCount = null;
    protected ?int $answerCount = null;
    public function setUpvoteCount(?int $upvoteCount) : void
    {
        $this->upvoteCount = $upvoteCount;
    }
    public function getUpvoteCount() : ?int
    {
        return $this->upvoteCount;
    }
    public function setSuggestedAnswer(ItemList|Answer|null $suggestedAnswer) : void
    {
        $this->suggestedAnswer = $suggestedAnswer;
    }
    public function getSuggestedAnswer() : ItemList|Answer|null
    {
        return $this->suggestedAnswer;
    }
    public function setDownvoteCount(?int $downvoteCount) : void
    {
        $this->downvoteCount = $downvoteCount;
    }
    public function getDownvoteCount() : ?int
    {
        return $this->downvoteCount;
    }
    public function setAnswerCount(?int $answerCount) : void
    {
        $this->answerCount = $answerCount;
    }
    public function getAnswerCount() : ?int
    {
        return $this->answerCount;
    }
    public function jsonSerialize()
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('upvoteCount' => $this->upvoteCount, 'suggestedAnswer' => $this->suggestedAnswer, 'downvoteCount' => $this->downvoteCount, 'answerCount' => $this->answerCount), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

