<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
 * @Description("A food-related business.")
 */
class FoodEstablishment extends LocalBusiness
{
    /**
     * @var string|\PSX\Uri\Uri|Menu|null
     */
    protected $hasMenu;
    /**
     * @var \PSX\Uri\Uri|string|bool|null
     */
    protected $acceptsReservations;
    /**
     * @var Rating|null
     */
    protected $starRating;
    /**
     * @var string|null
     */
    protected $servesCuisine;
    /**
     * @param string|\PSX\Uri\Uri|Menu|null $hasMenu
     */
    public function setHasMenu($hasMenu) : void
    {
        $this->hasMenu = $hasMenu;
    }
    /**
     * @return string|\PSX\Uri\Uri|Menu|null
     */
    public function getHasMenu()
    {
        return $this->hasMenu;
    }
    /**
     * @param \PSX\Uri\Uri|string|bool|null $acceptsReservations
     */
    public function setAcceptsReservations($acceptsReservations) : void
    {
        $this->acceptsReservations = $acceptsReservations;
    }
    /**
     * @return \PSX\Uri\Uri|string|bool|null
     */
    public function getAcceptsReservations()
    {
        return $this->acceptsReservations;
    }
    /**
     * @param Rating|null $starRating
     */
    public function setStarRating(?Rating $starRating) : void
    {
        $this->starRating = $starRating;
    }
    /**
     * @return Rating|null
     */
    public function getStarRating() : ?Rating
    {
        return $this->starRating;
    }
    /**
     * @param string|null $servesCuisine
     */
    public function setServesCuisine(?string $servesCuisine) : void
    {
        $this->servesCuisine = $servesCuisine;
    }
    /**
     * @return string|null
     */
    public function getServesCuisine() : ?string
    {
        return $this->servesCuisine;
    }
}
