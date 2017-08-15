<?php

/**
 * Class Product
 */
class Product
{
    private $_name;
    private $_version;

    /**
     * @param $name
     */
    public function setName($name)
    {
        $this->_name = $name;
    }

    /**
     * @param $version
     */
    public function setVersion($version)
    {
        $this->_version = $version;
    }
}

/**
 * Class BuilderProduct
 *
 * @property $_product Product
 */
abstract class BuilderProduct
{
    protected $_product;

    public function getProduct()
    {
        return $this->_product;
    }

    public function createProduct()
    {
        $this->_product = new Product();
    }

    abstract public function buildName();

    abstract public function buildVersion();
}

/**
 * Class ProductA
 *
 * @property Product $_product
 */
class ProductA extends BuilderProduct
{
    public function buildName()
    {
        $this->_product->setName('ProductA');
    }

    public function buildVersion()
    {
        $this->_product->setVersion("1.0");
    }
}

/**
 * Class ProductB
 *
 * @property Product $_product
 */
class ProductB extends BuilderProduct
{
    public function buildName()
    {
        $this->_product->setName('ProductB');
    }

    public function buildVersion()
    {
        $this->_product->setVersion("2.0");
    }
}

/**
 * Class Builder
 *
 * @property BuilderProduct $_builder
 */
class Builder
{

    private $_builder;

    /**
     * @param BuilderProduct $product
     */
    public function setBuilderProduct(BuilderProduct $product)
    {
        $this->_builder = $product;
    }

    /**
     * @return mixed
     */
    public function getProduct()
    {
        return $this->_builder->getProduct();
    }

    /**
     * Create product
     */
    public function constructProduct()
    {
        $this->_builder->createProduct();
        $this->_builder->buildName();
        $this->_builder->buildVersion();
    }
}
