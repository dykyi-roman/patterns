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
        $Log     = new Log();
        $Log->logTransaction('Start delivery');
        try{
            $order   = new Order();
            $order->create();
            $Log->logTransaction('Order create');

            $product = new Product($id);
            $product->getColor();
            $product->getCount();
            $product->getType();
            $order->makeSmeta($product);
            $Log->logTransaction('Order make smeta');

            $order->delivery($amount);
            $Log->logTransaction('Stop delivery');   
        }catch (Exception $e){
            $Log->logTransaction('Error delivery: '. $e->getMessage());
        }
    }
}
