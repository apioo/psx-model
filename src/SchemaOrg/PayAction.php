<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
 * @Description("An agent pays a price to a participant.")
 */
class PayAction extends TradeAction implements \JsonSerializable
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
