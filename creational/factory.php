<?php
/**
 * Factory
 */
interface Factory
{

    /**
     * Get Product
     *
     * @return Product
     */
    public function getProduct();
}

/**
 * Product
 */
interface Product
{

    /**
     * Get product name
     *
     * @return string
     */
    public function getName();
}

/**
 * Factory A
 */
class FactoryA implements Factory
{

    /**
     * ?????????? ???????
     *
     * @return Product
     */
    public function getProduct()
    {
        return new ProductA();
    }
}

/**
 * Factory B
 */
class FactoryB implements Factory
{

    /**
     * Get Product
     *
     * @return Product
     */
    public function getProduct()
    {
        return new ProductB();
    }
}

/**
 * Product A
 */
class ProductA implements Product
{

    /**
     * Get product name
     *
     * @return string
     */
    public function getName()
    {
        return 'The product A';
    }
}

/**
 * Product B
 */
class ProductB implements Product
{

    /**
     * Get product name
     *
     * @return string
     */
    public function getName()
    {
        return 'The product B';
    }
}