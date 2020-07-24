<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
* @Description("The act of physically/electronically dispatching an object for transfer from an origin to a destination.Related actions:<br/><br/>

<ul>
<li><a class=""localLink"" href=""http://schema.org/ReceiveAction"">ReceiveAction</a>: The reciprocal of SendAction.</li>
<li><a class=""localLink"" href=""http://schema.org/GiveAction"">GiveAction</a>: Unlike GiveAction, SendAction does not imply the transfer of ownership (e.g. I can send you my laptop, but I'm not necessarily giving it to you).</li>
</ul>
")
*/
class SendAction extends TransferAction implements \JsonSerializable
{
    /**
     * @var Thing|DeliveryMethod|null
     */
    protected $deliveryMethod;
    /**
     * @var Person|ContactPoint|Organization|Audience|null
     */
    protected $ccRecipient;
    /**
     * @var Organization|ContactPoint|Person|Audience|null
     */
    protected $recipient;
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
        return array_merge(parent::jsonSerialize(), array_filter(array('deliveryMethod' => $this->deliveryMethod, 'ccRecipient' => $this->ccRecipient, 'recipient' => $this->recipient), static function ($value) : bool {
            return $value !== null;
        }));
    }
}
