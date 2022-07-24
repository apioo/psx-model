<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('The act of physically/electronically taking delivery of an object thathas been transferred from an origin to a destination. Reciprocal of SendAction.<br/><br/>

Related actions:<br/><br/>

<ul>
<li><a class="localLink" href="http://schema.org/SendAction">SendAction</a>: The reciprocal of ReceiveAction.</li>
<li><a class="localLink" href="http://schema.org/TakeAction">TakeAction</a>: Unlike TakeAction, ReceiveAction does not imply that the ownership has been transfered (e.g. I can receive a package, but it does not mean the package is now mine).</li>
</ul>
')]
class ReceiveAction extends TransferAction implements \JsonSerializable
{
    protected Thing|DeliveryMethod|null $deliveryMethod = null;
    protected Person|Audience|Organization|null $sender = null;
    public function setDeliveryMethod(Thing|DeliveryMethod|null $deliveryMethod) : void
    {
        $this->deliveryMethod = $deliveryMethod;
    }
    public function getDeliveryMethod() : Thing|DeliveryMethod|null
    {
        return $this->deliveryMethod;
    }
    public function setSender(Person|Audience|Organization|null $sender) : void
    {
        $this->sender = $sender;
    }
    public function getSender() : Person|Audience|Organization|null
    {
        return $this->sender;
    }
    public function jsonSerialize() : object
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('deliveryMethod' => $this->deliveryMethod, 'sender' => $this->sender), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

