<?php

/**
 * Class Product
 */
class Product
{
    public function find($id)
    {
        
    }

    public function getCount()
    {

    }

    public function getColor()
    {

    }

    public function getType()
    {

    }

}

/**
 * Order
 */
class Order
{
    public function create()
    {
    }

    public function makeSmeta(Product $product)
    {
    }

    public function delivery($amount)
    {
    }
}

/**
 * Log
 */
class Log
{
    public function logTransaction($message)
    {
    }
}

/**
 * Class FacadeProduct
 */
class FacadeProduct
{
    /**
     * @param $id
     * @param $amount
     */
    public function delivery($id, $amount)
    {
        $product = new Product($id);
        $order   = new Order();
        $Log     = new Log();

        $order->create();
        $product->find($id);
        $Log->logTransaction('Order create');

        $product->getColor();
        $product->getCount();
        $product->getType();
        $order->makeSmeta($product);
        $Log->logTransaction('Order make smeta');

        $order->delivery($amount);
        $Log->logTransaction('Order delivery');
    }
}
