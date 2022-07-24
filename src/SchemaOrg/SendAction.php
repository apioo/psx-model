<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('The act of physically/electronically dispatching an object for transfer from an origin to a destination.Related actions:<br/><br/>

<ul>
<li><a class="localLink" href="http://schema.org/ReceiveAction">ReceiveAction</a>: The reciprocal of SendAction.</li>
<li><a class="localLink" href="http://schema.org/GiveAction">GiveAction</a>: Unlike GiveAction, SendAction does not imply the transfer of ownership (e.g. I can send you my laptop, but I\'m not necessarily giving it to you).</li>
</ul>
')]
class SendAction extends TransferAction implements \JsonSerializable
{
    protected Thing|DeliveryMethod|null $deliveryMethod = null;
    protected Person|ContactPoint|Organization|Audience|null $ccRecipient = null;
    protected Organization|ContactPoint|Person|Audience|null $recipient = null;
    public function setDeliveryMethod(Thing|DeliveryMethod|null $deliveryMethod) : void
    {
        $this->deliveryMethod = $deliveryMethod;
    }
    public function getDeliveryMethod() : Thing|DeliveryMethod|null
    {
        return $this->deliveryMethod;
    }
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
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('deliveryMethod' => $this->deliveryMethod, 'ccRecipient' => $this->ccRecipient, 'recipient' => $this->recipient), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

