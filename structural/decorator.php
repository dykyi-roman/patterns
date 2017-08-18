<?php

/**
 * Class DecoratorProduct
 */
class DecoratorProduct
{
    public $_product;

    /**
     * DecoratorProduct constructor.
     * @param Product $product
     */
    public function __construct(Product &$product)
    {
        $this->_product = $product;
    }

    /**
     * @return Product
     */
    public function stripXss()
    {
        // ...
        return $this->_product;
    }

    /**
     * @return Product
     */
    public function format()
    {
        // ...
        return $this->_product;
    }

    /**
     * @return Product
     */
    public function breakLongStrings()
    {
        // ...
        return $this->_product;
    }
}
