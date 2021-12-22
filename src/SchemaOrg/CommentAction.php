<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('The act of generating a comment about a subject.')]
class CommentAction extends CommunicateAction implements \JsonSerializable
{
    protected Thing|Comment|null $resultComment = null;
    public function setResultComment(Thing|Comment|null $resultComment) : void
    {
        $this->resultComment = $resultComment;
    }
    public function getResultComment() : Thing|Comment|null
    {
        return $this->resultComment;
    }
    public function jsonSerialize()
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('resultComment' => $this->resultComment), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

