<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('The act of posing a question / favor to someone.<br/><br/>

Related actions:<br/><br/>

<ul>
<li><a class="localLink" href="http://schema.org/ReplyAction">ReplyAction</a>: Appears generally as a response to AskAction.</li>
</ul>
')]
class AskAction extends CommunicateAction implements \JsonSerializable
{
    protected ?Question $question = null;
    public function setQuestion(?Question $question) : void
    {
        $this->question = $question;
    }
    public function getQuestion() : ?Question
    {
        return $this->question;
    }
    public function jsonSerialize() : object
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('question' => $this->question), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

