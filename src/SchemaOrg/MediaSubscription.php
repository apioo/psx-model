<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
 * @Description("A subscription which allows a user to access media including audio, video, books, etc.")
 */
class MediaSubscription extends Intangible implements \JsonSerializable
{
    /**
     * @var Offer|null
     */
    protected $expectsAcceptanceOf;
    /**
     * @var Organization|null
     */
    protected $authenticator;
    /**
     * @param Offer|null $expectsAcceptanceOf
     */
    public function setExpectsAcceptanceOf(?Offer $expectsAcceptanceOf) : void
    {
        $this->expectsAcceptanceOf = $expectsAcceptanceOf;
    }
    /**
     * @return Offer|null
     */
    public function getExpectsAcceptanceOf() : ?Offer
    {
        return $this->expectsAcceptanceOf;
    }
    /**
     * @param Organization|null $authenticator
     */
    public function setAuthenticator(?Organization $authenticator) : void
    {
        $this->authenticator = $authenticator;
    }
    /**
     * @return Organization|null
     */
    public function getAuthenticator() : ?Organization
    {
        return $this->authenticator;
    }
    public function jsonSerialize()
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('expectsAcceptanceOf' => $this->expectsAcceptanceOf, 'authenticator' => $this->authenticator), static function ($value) : bool {
            return $value !== null;
        }));
    }
}
