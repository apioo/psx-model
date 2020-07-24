<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
* @Description("The act of posing a question / favor to someone.<br/><br/>

Related actions:<br/><br/>

<ul>
<li><a class=""localLink"" href=""http://schema.org/ReplyAction"">ReplyAction</a>: Appears generally as a response to AskAction.</li>
</ul>
")
*/
class AskAction extends CommunicateAction implements \JsonSerializable
{
    /**
     * @var Question|null
     */
    protected $question;
    /**
     * @param Question|null $question
     */
    public function setQuestion(?Question $question) : void
    {
        $this->question = $question;
    }
    /**
     * @return Question|null
     */
    public function getQuestion() : ?Question
    {
        return $this->question;
    }
    public function jsonSerialize()
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('question' => $this->question), static function ($value) : bool {
            return $value !== null;
        }));
    }
}
