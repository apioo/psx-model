<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('The act of providing goods, services, or money without compensation, often for philanthropic reasons.')]
class DonateAction extends TradeAction implements \JsonSerializable
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

