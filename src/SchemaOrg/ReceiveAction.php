<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
* @Description("The act of physically/electronically taking delivery of an object thathas been transferred from an origin to a destination. Reciprocal of SendAction.<br/><br/>

Related actions:<br/><br/>

<ul>
<li><a class=""localLink"" href=""http://schema.org/SendAction"">SendAction</a>: The reciprocal of ReceiveAction.</li>
<li><a class=""localLink"" href=""http://schema.org/TakeAction"">TakeAction</a>: Unlike TakeAction, ReceiveAction does not imply that the ownership has been transfered (e.g. I can receive a package, but it does not mean the package is now mine).</li>
</ul>
")
*/
class ReceiveAction extends TransferAction implements \JsonSerializable
{
    /**
     * @var Thing|DeliveryMethod|null
     */
    protected $deliveryMethod;
    /**
     * @var Person|Audience|Organization|null
     */
    protected $sender;
    /**
     * @param Thing|DeliveryMethod|null $deliveryMethod
     */
    public function setDeliveryMethod($deliveryMethod) : void
    {
        $this->deliveryMethod = $deliveryMethod;
    }
    /**
     * @return Thing|DeliveryMethod|null
     */
    public function getDeliveryMethod()
    {
        return $this->deliveryMethod;
    }
    /**
     * @param Person|Audience|Organization|null $sender
     */
    public function setSender($sender) : void
    {
        $this->sender = $sender;
    }
    /**
     * @return Person|Audience|Organization|null
     */
    public function getSender()
    {
        return $this->sender;
    }
    public function jsonSerialize()
    {
        return (object) array_filter(array('deliveryMethod' => $this->deliveryMethod, 'sender' => $this->sender), static function ($value) : bool {
            return $value !== null;
        });
    }
}
