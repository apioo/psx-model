<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
 * @Description("The act of generating a comment about a subject.")
 */
class CommentAction extends CommunicateAction implements \JsonSerializable
{
    /**
     * @var Thing|Comment|null
     */
    protected $resultComment;
    /**
     * @param Thing|Comment|null $resultComment
     */
    public function setResultComment($resultComment) : void
    {
        $this->resultComment = $resultComment;
    }
    /**
     * @return Thing|Comment|null
     */
    public function getResultComment()
    {
        return $this->resultComment;
    }
    public function jsonSerialize()
    {
        return array_merge(parent::jsonSerialize(), array_filter(array('resultComment' => $this->resultComment), static function ($value) : bool {
            return $value !== null;
        }));
    }
}
