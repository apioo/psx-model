<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
 * @Description("A specific question - e.g. from a user seeking answers online, or collected in a Frequently Asked Questions (FAQ) document.")
 */
class Question extends CreativeWork implements \JsonSerializable
{
    /**
     * @var int|null
     */
    protected $upvoteCount;
    /**
     * @var ItemList|Answer|null
     */
    protected $suggestedAnswer;
    /**
     * @var int|null
     */
    protected $downvoteCount;
    /**
     * @var int|null
     */
    protected $answerCount;
    /**
     * @param int|null $upvoteCount
     */
    public function setUpvoteCount(?int $upvoteCount) : void
    {
        $this->upvoteCount = $upvoteCount;
    }
    /**
     * @return int|null
     */
    public function getUpvoteCount() : ?int
    {
        return $this->upvoteCount;
    }
    /**
     * @param ItemList|Answer|null $suggestedAnswer
     */
    public function setSuggestedAnswer($suggestedAnswer) : void
    {
        $this->suggestedAnswer = $suggestedAnswer;
    }
    /**
     * @return ItemList|Answer|null
     */
    public function getSuggestedAnswer()
    {
        return $this->suggestedAnswer;
    }
    /**
     * @param int|null $downvoteCount
     */
    public function setDownvoteCount(?int $downvoteCount) : void
    {
        $this->downvoteCount = $downvoteCount;
    }
    /**
     * @return int|null
     */
    public function getDownvoteCount() : ?int
    {
        return $this->downvoteCount;
    }
    /**
     * @param int|null $answerCount
     */
    public function setAnswerCount(?int $answerCount) : void
    {
        $this->answerCount = $answerCount;
    }
    /**
     * @return int|null
     */
    public function getAnswerCount() : ?int
    {
        return $this->answerCount;
    }
    public function jsonSerialize()
    {
        return (object) array_filter(array('upvoteCount' => $this->upvoteCount, 'suggestedAnswer' => $this->suggestedAnswer, 'downvoteCount' => $this->downvoteCount, 'answerCount' => $this->answerCount), static function ($value) : bool {
            return $value !== null;
        });
    }
}
