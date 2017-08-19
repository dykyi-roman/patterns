<?php

/**
 * Class AbstractProduct
 */
abstract class AbstractProduct
{
    protected $_product;
    protected $_title;

    abstract function getTitle();
    abstract function setTitle($title);
}

/**
 * Class Product
 */
class Product extends AbstractProduct
{

    function __construct()
    {
        $this->_title = null;
    }

    public function getTitle()
    {
        if ($this->_title != null) {
            return $this->_title;
        }
        else {
            return 'there is no title available';
        }
    }

    function setTitle($title)
    {
        $this->_title = $title;
    }
}

/**
 * Class SubProduct
 */
class SubProduct extends AbstractProduct
{
    protected $_parentProduct;

    function __construct(Product $parentProduct)
    {
        $this->_parentProduct = $parentProduct;
        $this->_title = null;
    }

    function getProduct()
    {
        return $this->_product;
    }

    function getParentProduct()
    {
        return $this->_parentProduct;
    }

    function getTitle()
    {
        if ($this->_title != null) {
            return $this->_title;
        }
        else {
            return $this->_parentProduct->getTitle();
        }
    }

    function setTitle($title)
    {
        $this->_title = $title;
    }
}
