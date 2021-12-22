<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('The act of responding to a question/message asked/sent by the object. Related to <a class="localLink" href="http://schema.org/AskAction">AskAction</a><br/><br/>

Related actions:<br/><br/>

<ul>
<li><a class="localLink" href="http://schema.org/AskAction">AskAction</a>: Appears generally as an origin of a ReplyAction.</li>
</ul>
')]
class ReplyAction extends CommunicateAction implements \JsonSerializable
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

