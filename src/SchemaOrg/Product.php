<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
 * @Description("Any offered product or service. For example: a pair of shoes; a concert ticket; the rental of a car; a haircut; or an episode of a TV show streamed online.")
 */
class Product extends Thing implements \JsonSerializable
{
    /**
     * @var Audience|null
     */
    protected $audience;
    /**
     * @var OfferItemCondition|null
     */
    protected $itemCondition;
    /**
     * @var \PSX\Uri\Uri|string|PropertyValue|null
     */
    protected $identifier;
    /**
     * @var QuantitativeValue|Distance|null
     */
    protected $width;
    /**
     * @var string|ProductModel|null
     */
    protected $model;
    /**
     * @var \PSX\Uri\Uri|Thing|string|null
     */
    protected $category;
    /**
     * @var string|null
     */
    protected $mpn;
    /**
     * @var \PSX\Uri\Uri|string|Product|null
     */
    protected $material;
    /**
     * @var AggregateRating|null
     */
    protected $aggregateRating;
    /**
     * @var Product|null
     */
    protected $isConsumableFor;
    /**
     * @var string|null
     */
    protected $gtin8;
    /**
     * @var Distance|QuantitativeValue|null
     */
    protected $height;
    /**
     * @var string|null
     */
    protected $award;
    /**
     * @var Review|null
     */
    protected $review;
    /**
     * @var string|null
     */
    protected $sku;
    /**
     * @var Service|Product|null
     */
    protected $isSimilarTo;
    /**
     * @var string|null
     */
    protected $gtin12;
    /**
     * @var string|null
     */
    protected $gtin14;
    /**
     * @var Organization|null
     */
    protected $manufacturer;
    /**
     * @var Product|null
     */
    protected $isAccessoryOrSparePartFor;
    /**
     * @var Service|Product|null
     */
    protected $isRelatedTo;
    /**
     * @var \PSX\Uri\Uri|ImageObject|null
     */
    protected $logo;
    /**
     * @var Organization|Brand|null
     */
    protected $brand;
    /**
     * @var PropertyValue|null
     */
    protected $additionalProperty;
    /**
     * @var string|null
     */
    protected $productID;
    /**
     * @var \PSX\DateTime\Date|null
     */
    protected $purchaseDate;
    /**
     * @var string|null
     */
    protected $color;
    /**
     * @var Distance|QuantitativeValue|null
     */
    protected $depth;
    /**
     * @var string|null
     */
    protected $slogan;
    /**
     * @var \PSX\DateTime\Date|null
     */
    protected $productionDate;
    /**
     * @var QuantitativeValue|null
     */
    protected $weight;
    /**
     * @var \PSX\DateTime\Date|null
     */
    protected $releaseDate;
    /**
     * @var Trip|Event|Product|Offer|Demand|Service|CreativeWork|MenuItem|null
     */
    protected $itemOffered;
    /**
     * @var Offer|Demand|null
     */
    protected $offers;
    /**
     * @param Audience|null $audience
     */
    public function setAudience(?Audience $audience) : void
    {
        $this->audience = $audience;
    }
    /**
     * @return Audience|null
     */
    public function getAudience() : ?Audience
    {
        return $this->audience;
    }
    /**
     * @param OfferItemCondition|null $itemCondition
     */
    public function setItemCondition(?OfferItemCondition $itemCondition) : void
    {
        $this->itemCondition = $itemCondition;
    }
    /**
     * @return OfferItemCondition|null
     */
    public function getItemCondition() : ?OfferItemCondition
    {
        return $this->itemCondition;
    }
    /**
     * @param \PSX\Uri\Uri|string|PropertyValue|null $identifier
     */
    public function setIdentifier($identifier) : void
    {
        $this->identifier = $identifier;
    }
    /**
     * @return \PSX\Uri\Uri|string|PropertyValue|null
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }
    /**
     * @param QuantitativeValue|Distance|null $width
     */
    public function setWidth($width) : void
    {
        $this->width = $width;
    }
    /**
     * @return QuantitativeValue|Distance|null
     */
    public function getWidth()
    {
        return $this->width;
    }
    /**
     * @param string|ProductModel|null $model
     */
    public function setModel($model) : void
    {
        $this->model = $model;
    }
    /**
     * @return string|ProductModel|null
     */
    public function getModel()
    {
        return $this->model;
    }
    /**
     * @param \PSX\Uri\Uri|Thing|string|null $category
     */
    public function setCategory($category) : void
    {
        $this->category = $category;
    }
    /**
     * @return \PSX\Uri\Uri|Thing|string|null
     */
    public function getCategory()
    {
        return $this->category;
    }
    /**
     * @param string|null $mpn
     */
    public function setMpn(?string $mpn) : void
    {
        $this->mpn = $mpn;
    }
    /**
     * @return string|null
     */
    public function getMpn() : ?string
    {
        return $this->mpn;
    }
    /**
     * @param \PSX\Uri\Uri|string|Product|null $material
     */
    public function setMaterial($material) : void
    {
        $this->material = $material;
    }
    /**
     * @return \PSX\Uri\Uri|string|Product|null
     */
    public function getMaterial()
    {
        return $this->material;
    }
    /**
     * @param AggregateRating|null $aggregateRating
     */
    public function setAggregateRating(?AggregateRating $aggregateRating) : void
    {
        $this->aggregateRating = $aggregateRating;
    }
    /**
     * @return AggregateRating|null
     */
    public function getAggregateRating() : ?AggregateRating
    {
        return $this->aggregateRating;
    }
    /**
     * @param Product|null $isConsumableFor
     */
    public function setIsConsumableFor(?Product $isConsumableFor) : void
    {
        $this->isConsumableFor = $isConsumableFor;
    }
    /**
     * @return Product|null
     */
    public function getIsConsumableFor() : ?Product
    {
        return $this->isConsumableFor;
    }
    /**
     * @param string|null $gtin8
     */
    public function setGtin8(?string $gtin8) : void
    {
        $this->gtin8 = $gtin8;
    }
    /**
     * @return string|null
     */
    public function getGtin8() : ?string
    {
        return $this->gtin8;
    }
    /**
     * @param Distance|QuantitativeValue|null $height
     */
    public function setHeight($height) : void
    {
        $this->height = $height;
    }
    /**
     * @return Distance|QuantitativeValue|null
     */
    public function getHeight()
    {
        return $this->height;
    }
    /**
     * @param string|null $award
     */
    public function setAward(?string $award) : void
    {
        $this->award = $award;
    }
    /**
     * @return string|null
     */
    public function getAward() : ?string
    {
        return $this->award;
    }
    /**
     * @param Review|null $review
     */
    public function setReview(?Review $review) : void
    {
        $this->review = $review;
    }
    /**
     * @return Review|null
     */
    public function getReview() : ?Review
    {
        return $this->review;
    }
    /**
     * @param string|null $sku
     */
    public function setSku(?string $sku) : void
    {
        $this->sku = $sku;
    }
    /**
     * @return string|null
     */
    public function getSku() : ?string
    {
        return $this->sku;
    }
    /**
     * @param Service|Product|null $isSimilarTo
     */
    public function setIsSimilarTo($isSimilarTo) : void
    {
        $this->isSimilarTo = $isSimilarTo;
    }
    /**
     * @return Service|Product|null
     */
    public function getIsSimilarTo()
    {
        return $this->isSimilarTo;
    }
    /**
     * @param string|null $gtin12
     */
    public function setGtin12(?string $gtin12) : void
    {
        $this->gtin12 = $gtin12;
    }
    /**
     * @return string|null
     */
    public function getGtin12() : ?string
    {
        return $this->gtin12;
    }
    /**
     * @param string|null $gtin14
     */
    public function setGtin14(?string $gtin14) : void
    {
        $this->gtin14 = $gtin14;
    }
    /**
     * @return string|null
     */
    public function getGtin14() : ?string
    {
        return $this->gtin14;
    }
    /**
     * @param Organization|null $manufacturer
     */
    public function setManufacturer(?Organization $manufacturer) : void
    {
        $this->manufacturer = $manufacturer;
    }
    /**
     * @return Organization|null
     */
    public function getManufacturer() : ?Organization
    {
        return $this->manufacturer;
    }
    /**
     * @param Product|null $isAccessoryOrSparePartFor
     */
    public function setIsAccessoryOrSparePartFor(?Product $isAccessoryOrSparePartFor) : void
    {
        $this->isAccessoryOrSparePartFor = $isAccessoryOrSparePartFor;
    }
    /**
     * @return Product|null
     */
    public function getIsAccessoryOrSparePartFor() : ?Product
    {
        return $this->isAccessoryOrSparePartFor;
    }
    /**
     * @param Service|Product|null $isRelatedTo
     */
    public function setIsRelatedTo($isRelatedTo) : void
    {
        $this->isRelatedTo = $isRelatedTo;
    }
    /**
     * @return Service|Product|null
     */
    public function getIsRelatedTo()
    {
        return $this->isRelatedTo;
    }
    /**
     * @param \PSX\Uri\Uri|ImageObject|null $logo
     */
    public function setLogo($logo) : void
    {
        $this->logo = $logo;
    }
    /**
     * @return \PSX\Uri\Uri|ImageObject|null
     */
    public function getLogo()
    {
        return $this->logo;
    }
    /**
     * @param Organization|Brand|null $brand
     */
    public function setBrand($brand) : void
    {
        $this->brand = $brand;
    }
    /**
     * @return Organization|Brand|null
     */
    public function getBrand()
    {
        return $this->brand;
    }
    /**
     * @param PropertyValue|null $additionalProperty
     */
    public function setAdditionalProperty(?PropertyValue $additionalProperty) : void
    {
        $this->additionalProperty = $additionalProperty;
    }
    /**
     * @return PropertyValue|null
     */
    public function getAdditionalProperty() : ?PropertyValue
    {
        return $this->additionalProperty;
    }
    /**
     * @param string|null $productID
     */
    public function setProductID(?string $productID) : void
    {
        $this->productID = $productID;
    }
    /**
     * @return string|null
     */
    public function getProductID() : ?string
    {
        return $this->productID;
    }
    /**
     * @param \PSX\DateTime\Date|null $purchaseDate
     */
    public function setPurchaseDate(?\PSX\DateTime\Date $purchaseDate) : void
    {
        $this->purchaseDate = $purchaseDate;
    }
    /**
     * @return \PSX\DateTime\Date|null
     */
    public function getPurchaseDate() : ?\PSX\DateTime\Date
    {
        return $this->purchaseDate;
    }
    /**
     * @param string|null $color
     */
    public function setColor(?string $color) : void
    {
        $this->color = $color;
    }
    /**
     * @return string|null
     */
    public function getColor() : ?string
    {
        return $this->color;
    }
    /**
     * @param Distance|QuantitativeValue|null $depth
     */
    public function setDepth($depth) : void
    {
        $this->depth = $depth;
    }
    /**
     * @return Distance|QuantitativeValue|null
     */
    public function getDepth()
    {
        return $this->depth;
    }
    /**
     * @param string|null $slogan
     */
    public function setSlogan(?string $slogan) : void
    {
        $this->slogan = $slogan;
    }
    /**
     * @return string|null
     */
    public function getSlogan() : ?string
    {
        return $this->slogan;
    }
    /**
     * @param \PSX\DateTime\Date|null $productionDate
     */
    public function setProductionDate(?\PSX\DateTime\Date $productionDate) : void
    {
        $this->productionDate = $productionDate;
    }
    /**
     * @return \PSX\DateTime\Date|null
     */
    public function getProductionDate() : ?\PSX\DateTime\Date
    {
        return $this->productionDate;
    }
    /**
     * @param QuantitativeValue|null $weight
     */
    public function setWeight(?QuantitativeValue $weight) : void
    {
        $this->weight = $weight;
    }
    /**
     * @return QuantitativeValue|null
     */
    public function getWeight() : ?QuantitativeValue
    {
        return $this->weight;
    }
    /**
     * @param \PSX\DateTime\Date|null $releaseDate
     */
    public function setReleaseDate(?\PSX\DateTime\Date $releaseDate) : void
    {
        $this->releaseDate = $releaseDate;
    }
    /**
     * @return \PSX\DateTime\Date|null
     */
    public function getReleaseDate() : ?\PSX\DateTime\Date
    {
        return $this->releaseDate;
    }
    /**
     * @param Trip|Event|Product|Offer|Demand|Service|CreativeWork|MenuItem|null $itemOffered
     */
    public function setItemOffered($itemOffered) : void
    {
        $this->itemOffered = $itemOffered;
    }
    /**
     * @return Trip|Event|Product|Offer|Demand|Service|CreativeWork|MenuItem|null
     */
    public function getItemOffered()
    {
        return $this->itemOffered;
    }
    /**
     * @param Offer|Demand|null $offers
     */
    public function setOffers($offers) : void
    {
        $this->offers = $offers;
    }
    /**
     * @return Offer|Demand|null
     */
    public function getOffers()
    {
        return $this->offers;
    }
    public function jsonSerialize()
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('audience' => $this->audience, 'itemCondition' => $this->itemCondition, 'identifier' => $this->identifier, 'width' => $this->width, 'model' => $this->model, 'category' => $this->category, 'mpn' => $this->mpn, 'material' => $this->material, 'aggregateRating' => $this->aggregateRating, 'isConsumableFor' => $this->isConsumableFor, 'gtin8' => $this->gtin8, 'height' => $this->height, 'award' => $this->award, 'review' => $this->review, 'sku' => $this->sku, 'isSimilarTo' => $this->isSimilarTo, 'gtin12' => $this->gtin12, 'gtin14' => $this->gtin14, 'manufacturer' => $this->manufacturer, 'isAccessoryOrSparePartFor' => $this->isAccessoryOrSparePartFor, 'isRelatedTo' => $this->isRelatedTo, 'logo' => $this->logo, 'brand' => $this->brand, 'additionalProperty' => $this->additionalProperty, 'productID' => $this->productID, 'purchaseDate' => $this->purchaseDate, 'color' => $this->color, 'depth' => $this->depth, 'slogan' => $this->slogan, 'productionDate' => $this->productionDate, 'weight' => $this->weight, 'releaseDate' => $this->releaseDate, 'itemOffered' => $this->itemOffered, 'offers' => $this->offers), static function ($value) : bool {
            return $value !== null;
        }));
    }
}
