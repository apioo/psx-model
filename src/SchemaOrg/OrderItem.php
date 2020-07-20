<?php

declare(strict_types = 1);

namespace PSX\Model\SchemaOrg;

/**
 * @Description("An order item is a line of an order. It includes the quantity and shipping details of a bought offer.")
 */
class OrderItem extends Intangible implements \JsonSerializable
{
    /**
     * @var ParcelDelivery|null
     */
    protected $orderDelivery;
    /**
     * @var OrderStatus|null
     */
    protected $orderItemStatus;
    /**
     * @var float|null
     */
    protected $orderQuantity;
    /**
     * @var string|null
     */
    protected $orderItemNumber;
    /**
     * @var Product|Service|OrderItem|null
     */
    protected $orderedItem;
    /**
     * @param ParcelDelivery|null $orderDelivery
     */
    public function setOrderDelivery(?ParcelDelivery $orderDelivery) : void
    {
        $this->orderDelivery = $orderDelivery;
    }
    /**
     * @return ParcelDelivery|null
     */
    public function getOrderDelivery() : ?ParcelDelivery
    {
        return $this->orderDelivery;
    }
    /**
     * @param OrderStatus|null $orderItemStatus
     */
    public function setOrderItemStatus(?OrderStatus $orderItemStatus) : void
    {
        $this->orderItemStatus = $orderItemStatus;
    }
    /**
     * @return OrderStatus|null
     */
    public function getOrderItemStatus() : ?OrderStatus
    {
        return $this->orderItemStatus;
    }
    /**
     * @param float|null $orderQuantity
     */
    public function setOrderQuantity(?float $orderQuantity) : void
    {
        $this->orderQuantity = $orderQuantity;
    }
    /**
     * @return float|null
     */
    public function getOrderQuantity() : ?float
    {
        return $this->orderQuantity;
    }
    /**
     * @param string|null $orderItemNumber
     */
    public function setOrderItemNumber(?string $orderItemNumber) : void
    {
        $this->orderItemNumber = $orderItemNumber;
    }
    /**
     * @return string|null
     */
    public function getOrderItemNumber() : ?string
    {
        return $this->orderItemNumber;
    }
    /**
     * @param Product|Service|OrderItem|null $orderedItem
     */
    public function setOrderedItem($orderedItem) : void
    {
        $this->orderedItem = $orderedItem;
    }
    /**
     * @return Product|Service|OrderItem|null
     */
    public function getOrderedItem()
    {
        return $this->orderedItem;
    }
    public function jsonSerialize()
    {
        return (object) array_filter(array('orderDelivery' => $this->orderDelivery, 'orderItemStatus' => $this->orderItemStatus, 'orderQuantity' => $this->orderQuantity, 'orderItemNumber' => $this->orderItemNumber, 'orderedItem' => $this->orderedItem), static function ($value) : bool {
            return $value !== null;
        });
    }
}
