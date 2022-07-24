<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('A food-related business.')]
class FoodEstablishment extends LocalBusiness implements \JsonSerializable
{
    protected string|\PSX\Uri\Uri|Menu|null $hasMenu = null;
    protected \PSX\Uri\Uri|string|bool|null $acceptsReservations = null;
    protected ?Rating $starRating = null;
    protected ?string $servesCuisine = null;
    public function setHasMenu(string|\PSX\Uri\Uri|Menu|null $hasMenu) : void
    {
        $this->hasMenu = $hasMenu;
    }
    public function getHasMenu() : string|\PSX\Uri\Uri|Menu|null
    {
        return $this->hasMenu;
    }
    public function setAcceptsReservations(\PSX\Uri\Uri|string|bool|null $acceptsReservations) : void
    {
        $this->acceptsReservations = $acceptsReservations;
    }
    public function getAcceptsReservations() : \PSX\Uri\Uri|string|bool|null
    {
        return $this->acceptsReservations;
    }
    public function setStarRating(?Rating $starRating) : void
    {
        $this->starRating = $starRating;
    }
    public function getStarRating() : ?Rating
    {
        return $this->starRating;
    }
    public function setServesCuisine(?string $servesCuisine) : void
    {
        $this->servesCuisine = $servesCuisine;
    }
    public function getServesCuisine() : ?string
    {
        return $this->servesCuisine;
    }
    public function jsonSerialize() : object
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('hasMenu' => $this->hasMenu, 'acceptsReservations' => $this->acceptsReservations, 'starRating' => $this->starRating, 'servesCuisine' => $this->servesCuisine), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

