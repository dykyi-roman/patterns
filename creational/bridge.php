<?php

/**
 * Interface ProductAPI
 */
interface ProductAPI
{
    public function delivery($from, $to);
}

/**
 * Class Product_1
 */
class DeliveryApi_1 implements ProductAPI
{
    public function delivery($from, $to)
    {
        echo "From $from to $to";
    }
}

/**
 * Class Product_2
 */
class DeliveryApi_2 implements ProductAPI
{
    public function delivery($from, $to)
    {
        echo "From $from to $to";
    }
}

/**
 * Class Product
 */
abstract class Product
{
    protected $productAPI;

    public abstract function delivery($from, $to);

    public abstract function getAmount($productId);

    protected function __construct(ProductAPI $productAPI)
    {
        $this->productAPI = $productAPI;
    }
}

/**
 * Class FoodProduct
 */
class FoodProduct extends Product
{
    private $type;

    public function __construct($type, ProductAPI $productAPI)
    {
        parent::__construct($productAPI);
        $this->type = $type;
    }

    public function delivery($from, $to)
    {
        $this->productAPI->delivery($from, $to);
    }

    public function getAmount($productId)
    {
        return $productId;
    }
}

$products[] = new FoodProduct('bannan', new DeliveryApi_1());
$products[] = new FoodProduct('apple', new DeliveryApi_2());
