<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A subscription which allows a user to access media including audio, video, books, etc.')]
class MediaSubscription extends Intangible implements \JsonSerializable
{
    protected ?Offer $expectsAcceptanceOf = null;
    protected ?Organization $authenticator = null;
    public function setExpectsAcceptanceOf(?Offer $expectsAcceptanceOf) : void
    {
        $this->expectsAcceptanceOf = $expectsAcceptanceOf;
    }
    public function getExpectsAcceptanceOf() : ?Offer
    {
        return $this->expectsAcceptanceOf;
    }
    public function setAuthenticator(?Organization $authenticator) : void
    {
        $this->authenticator = $authenticator;
    }
    public function getAuthenticator() : ?Organization
    {
        return $this->authenticator;
    }
    public function jsonSerialize() : object
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('expectsAcceptanceOf' => $this->expectsAcceptanceOf, 'authenticator' => $this->authenticator), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

