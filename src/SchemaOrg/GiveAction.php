<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('The act of transferring ownership of an object to a destination. Reciprocal of TakeAction.<br/><br/>

Related actions:<br/><br/>

<ul>
<li><a class="localLink" href="http://schema.org/TakeAction">TakeAction</a>: Reciprocal of GiveAction.</li>
<li><a class="localLink" href="http://schema.org/SendAction">SendAction</a>: Unlike SendAction, GiveAction implies that ownership is being transferred (e.g. I may send my laptop to you, but that doesn\'t mean I\'m giving it to you).</li>
</ul>
')]
class GiveAction extends TransferAction implements \JsonSerializable
{
    protected Person|ContactPoint|Organization|Audience|null $ccRecipient = null;
    protected Organization|ContactPoint|Person|Audience|null $recipient = null;
    public function setCcRecipient(Person|ContactPoint|Organization|Audience|null $ccRecipient) : void
    {
        $this->ccRecipient = $ccRecipient;
    }
    public function getCcRecipient() : Person|ContactPoint|Organization|Audience|null
    {
        return $this->ccRecipient;
    }
    public function setRecipient(Organization|ContactPoint|Person|Audience|null $recipient) : void
    {
        $this->recipient = $recipient;
    }
    public function getRecipient() : Organization|ContactPoint|Person|Audience|null
    {
        return $this->recipient;
    }
    public function jsonSerialize() : object
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('ccRecipient' => $this->ccRecipient, 'recipient' => $this->recipient), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

