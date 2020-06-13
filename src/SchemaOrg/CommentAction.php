<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
 * @Description("The act of generating a comment about a subject.")
 */
class CommentAction extends CommunicateAction
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
}
