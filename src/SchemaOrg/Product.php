<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

use PSX\Schema\Attribute\Description;

#[Description('Any offered product or service. For example: a pair of shoes; a concert ticket; the rental of a car; a haircut; or an episode of a TV show streamed online.')]
class Product extends Thing implements \JsonSerializable
{
    protected ?Audience $audience = null;
    protected ?OfferItemCondition $itemCondition = null;
    protected \PSX\Uri\Uri|string|PropertyValue|null $identifier = null;
    protected QuantitativeValue|Distance|null $width = null;
    protected string|ProductModel|null $model = null;
    protected \PSX\Uri\Uri|Thing|string|null $category = null;
    protected ?string $mpn = null;
    protected \PSX\Uri\Uri|string|Product|null $material = null;
    protected ?AggregateRating $aggregateRating = null;
    protected ?Product $isConsumableFor = null;
    protected ?string $gtin8 = null;
    protected Distance|QuantitativeValue|null $height = null;
    protected ?string $award = null;
    protected ?Review $review = null;
    protected ?string $sku = null;
    protected Service|Product|null $isSimilarTo = null;
    protected ?string $gtin12 = null;
    protected ?string $gtin14 = null;
    protected ?Organization $manufacturer = null;
    protected ?Product $isAccessoryOrSparePartFor = null;
    protected Service|Product|null $isRelatedTo = null;
    protected \PSX\Uri\Uri|ImageObject|null $logo = null;
    protected Organization|Brand|null $brand = null;
    protected ?PropertyValue $additionalProperty = null;
    protected ?string $productID = null;
    protected ?\PSX\DateTime\Date $purchaseDate = null;
    protected ?string $color = null;
    protected Distance|QuantitativeValue|null $depth = null;
    protected ?string $slogan = null;
    protected ?\PSX\DateTime\Date $productionDate = null;
    protected ?QuantitativeValue $weight = null;
    protected ?\PSX\DateTime\Date $releaseDate = null;
    protected Trip|Event|Product|Offer|Demand|Service|CreativeWork|MenuItem|null $itemOffered = null;
    protected Offer|Demand|null $offers = null;
    public function setAudience(?Audience $audience) : void
    {
        $this->audience = $audience;
    }
    public function getAudience() : ?Audience
    {
        return $this->audience;
    }
    public function setItemCondition(?OfferItemCondition $itemCondition) : void
    {
        $this->itemCondition = $itemCondition;
    }
    public function getItemCondition() : ?OfferItemCondition
    {
        return $this->itemCondition;
    }
    public function setIdentifier(\PSX\Uri\Uri|string|PropertyValue|null $identifier) : void
    {
        $this->identifier = $identifier;
    }
    public function getIdentifier() : \PSX\Uri\Uri|string|PropertyValue|null
    {
        return $this->identifier;
    }
    public function setWidth(QuantitativeValue|Distance|null $width) : void
    {
        $this->width = $width;
    }
    public function getWidth() : QuantitativeValue|Distance|null
    {
        return $this->width;
    }
    public function setModel(string|ProductModel|null $model) : void
    {
        $this->model = $model;
    }
    public function getModel() : string|ProductModel|null
    {
        return $this->model;
    }
    public function setCategory(\PSX\Uri\Uri|Thing|string|null $category) : void
    {
        $this->category = $category;
    }
    public function getCategory() : \PSX\Uri\Uri|Thing|string|null
    {
        return $this->category;
    }
    public function setMpn(?string $mpn) : void
    {
        $this->mpn = $mpn;
    }
    public function getMpn() : ?string
    {
        return $this->mpn;
    }
    public function setMaterial(\PSX\Uri\Uri|string|Product|null $material) : void
    {
        $this->material = $material;
    }
    public function getMaterial() : \PSX\Uri\Uri|string|Product|null
    {
        return $this->material;
    }
    public function setAggregateRating(?AggregateRating $aggregateRating) : void
    {
        $this->aggregateRating = $aggregateRating;
    }
    public function getAggregateRating() : ?AggregateRating
    {
        return $this->aggregateRating;
    }
    public function setIsConsumableFor(?Product $isConsumableFor) : void
    {
        $this->isConsumableFor = $isConsumableFor;
    }
    public function getIsConsumableFor() : ?Product
    {
        return $this->isConsumableFor;
    }
    public function setGtin8(?string $gtin8) : void
    {
        $this->gtin8 = $gtin8;
    }
    public function getGtin8() : ?string
    {
        return $this->gtin8;
    }
    public function setHeight(Distance|QuantitativeValue|null $height) : void
    {
        $this->height = $height;
    }
    public function getHeight() : Distance|QuantitativeValue|null
    {
        return $this->height;
    }
    public function setAward(?string $award) : void
    {
        $this->award = $award;
    }
    public function getAward() : ?string
    {
        return $this->award;
    }
    public function setReview(?Review $review) : void
    {
        $this->review = $review;
    }
    public function getReview() : ?Review
    {
        return $this->review;
    }
    public function setSku(?string $sku) : void
    {
        $this->sku = $sku;
    }
    public function getSku() : ?string
    {
        return $this->sku;
    }
    public function setIsSimilarTo(Service|Product|null $isSimilarTo) : void
    {
        $this->isSimilarTo = $isSimilarTo;
    }
    public function getIsSimilarTo() : Service|Product|null
    {
        return $this->isSimilarTo;
    }
    public function setGtin12(?string $gtin12) : void
    {
        $this->gtin12 = $gtin12;
    }
    public function getGtin12() : ?string
    {
        return $this->gtin12;
    }
    public function setGtin14(?string $gtin14) : void
    {
        $this->gtin14 = $gtin14;
    }
    public function getGtin14() : ?string
    {
        return $this->gtin14;
    }
    public function setManufacturer(?Organization $manufacturer) : void
    {
        $this->manufacturer = $manufacturer;
    }
    public function getManufacturer() : ?Organization
    {
        return $this->manufacturer;
    }
    public function setIsAccessoryOrSparePartFor(?Product $isAccessoryOrSparePartFor) : void
    {
        $this->isAccessoryOrSparePartFor = $isAccessoryOrSparePartFor;
    }
    public function getIsAccessoryOrSparePartFor() : ?Product
    {
        return $this->isAccessoryOrSparePartFor;
    }
    public function setIsRelatedTo(Service|Product|null $isRelatedTo) : void
    {
        $this->isRelatedTo = $isRelatedTo;
    }
    public function getIsRelatedTo() : Service|Product|null
    {
        return $this->isRelatedTo;
    }
    public function setLogo(\PSX\Uri\Uri|ImageObject|null $logo) : void
    {
        $this->logo = $logo;
    }
    public function getLogo() : \PSX\Uri\Uri|ImageObject|null
    {
        return $this->logo;
    }
    public function setBrand(Organization|Brand|null $brand) : void
    {
        $this->brand = $brand;
    }
    public function getBrand() : Organization|Brand|null
    {
        return $this->brand;
    }
    public function setAdditionalProperty(?PropertyValue $additionalProperty) : void
    {
        $this->additionalProperty = $additionalProperty;
    }
    public function getAdditionalProperty() : ?PropertyValue
    {
        return $this->additionalProperty;
    }
    public function setProductID(?string $productID) : void
    {
        $this->productID = $productID;
    }
    public function getProductID() : ?string
    {
        return $this->productID;
    }
    public function setPurchaseDate(?\PSX\DateTime\Date $purchaseDate) : void
    {
        $this->purchaseDate = $purchaseDate;
    }
    public function getPurchaseDate() : ?\PSX\DateTime\Date
    {
        return $this->purchaseDate;
    }
    public function setColor(?string $color) : void
    {
        $this->color = $color;
    }
    public function getColor() : ?string
    {
        return $this->color;
    }
    public function setDepth(Distance|QuantitativeValue|null $depth) : void
    {
        $this->depth = $depth;
    }
    public function getDepth() : Distance|QuantitativeValue|null
    {
        return $this->depth;
    }
    public function setSlogan(?string $slogan) : void
    {
        $this->slogan = $slogan;
    }
    public function getSlogan() : ?string
    {
        return $this->slogan;
    }
    public function setProductionDate(?\PSX\DateTime\Date $productionDate) : void
    {
        $this->productionDate = $productionDate;
    }
    public function getProductionDate() : ?\PSX\DateTime\Date
    {
        return $this->productionDate;
    }
    public function setWeight(?QuantitativeValue $weight) : void
    {
        $this->weight = $weight;
    }
    public function getWeight() : ?QuantitativeValue
    {
        return $this->weight;
    }
    public function setReleaseDate(?\PSX\DateTime\Date $releaseDate) : void
    {
        $this->releaseDate = $releaseDate;
    }
    public function getReleaseDate() : ?\PSX\DateTime\Date
    {
        return $this->releaseDate;
    }
    public function setItemOffered(Trip|Event|Product|Offer|Demand|Service|CreativeWork|MenuItem|null $itemOffered) : void
    {
        $this->itemOffered = $itemOffered;
    }
    public function getItemOffered() : Trip|Event|Product|Offer|Demand|Service|CreativeWork|MenuItem|null
    {
        return $this->itemOffered;
    }
    public function setOffers(Offer|Demand|null $offers) : void
    {
        $this->offers = $offers;
    }
    public function getOffers() : Offer|Demand|null
    {
        return $this->offers;
    }
    public function jsonSerialize() : object
    {
        return (object) array_merge((array) parent::jsonSerialize(), array_filter(array('audience' => $this->audience, 'itemCondition' => $this->itemCondition, 'identifier' => $this->identifier, 'width' => $this->width, 'model' => $this->model, 'category' => $this->category, 'mpn' => $this->mpn, 'material' => $this->material, 'aggregateRating' => $this->aggregateRating, 'isConsumableFor' => $this->isConsumableFor, 'gtin8' => $this->gtin8, 'height' => $this->height, 'award' => $this->award, 'review' => $this->review, 'sku' => $this->sku, 'isSimilarTo' => $this->isSimilarTo, 'gtin12' => $this->gtin12, 'gtin14' => $this->gtin14, 'manufacturer' => $this->manufacturer, 'isAccessoryOrSparePartFor' => $this->isAccessoryOrSparePartFor, 'isRelatedTo' => $this->isRelatedTo, 'logo' => $this->logo, 'brand' => $this->brand, 'additionalProperty' => $this->additionalProperty, 'productID' => $this->productID, 'purchaseDate' => $this->purchaseDate, 'color' => $this->color, 'depth' => $this->depth, 'slogan' => $this->slogan, 'productionDate' => $this->productionDate, 'weight' => $this->weight, 'releaseDate' => $this->releaseDate, 'itemOffered' => $this->itemOffered, 'offers' => $this->offers), static function ($value) : bool {
            return $value !== null;
        }));
    }
}

