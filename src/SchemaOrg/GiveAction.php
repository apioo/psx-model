<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
* @Description("The act of transferring ownership of an object to a destination. Reciprocal of TakeAction.<br/><br/>

Related actions:<br/><br/>

<ul>
<li><a class=""localLink"" href=""http://schema.org/TakeAction"">TakeAction</a>: Reciprocal of GiveAction.</li>
<li><a class=""localLink"" href=""http://schema.org/SendAction"">SendAction</a>: Unlike SendAction, GiveAction implies that ownership is being transferred (e.g. I may send my laptop to you, but that doesn't mean I'm giving it to you).</li>
</ul>
")
*/
class GiveAction extends TransferAction implements \JsonSerializable
{
    /**
     * @var Person|ContactPoint|Organization|Audience|null
     */
    protected $ccRecipient;
    /**
     * @var Organization|ContactPoint|Person|Audience|null
     */
    protected $recipient;
    /**
     * @param Person|ContactPoint|Organization|Audience|null $ccRecipient
     */
    public function setCcRecipient($ccRecipient) : void
    {
        $this->ccRecipient = $ccRecipient;
    }
    /**
     * @return Person|ContactPoint|Organization|Audience|null
     */
    public function getCcRecipient()
    {
        return $this->ccRecipient;
    }
    /**
     * @param Organization|ContactPoint|Person|Audience|null $recipient
     */
    public function setRecipient($recipient) : void
    {
        $this->recipient = $recipient;
    }
    /**
     * @return Organization|ContactPoint|Person|Audience|null
     */
    public function getRecipient()
    {
        return $this->recipient;
    }
    public function jsonSerialize()
    {
        return (object) array_filter(array('ccRecipient' => $this->ccRecipient, 'recipient' => $this->recipient), static function ($value) : bool {
            return $value !== null;
        });
    }
}
