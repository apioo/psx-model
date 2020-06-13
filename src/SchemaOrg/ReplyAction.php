<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
* @Description("The act of responding to a question/message asked/sent by the object. Related to <a class=""localLink"" href=""http://schema.org/AskAction"">AskAction</a><br/><br/>

Related actions:<br/><br/>

<ul>
<li><a class=""localLink"" href=""http://schema.org/AskAction"">AskAction</a>: Appears generally as an origin of a ReplyAction.</li>
</ul>
")
*/
class ReplyAction extends CommunicateAction
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
