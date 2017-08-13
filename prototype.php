<?php

/**
 * Method 1
 *
 * Class ProductA
 */
class ProductA
{
    public function __construct(ProductA $Prototype = null)
    {
        if(null !== $Prototype) {
            //do something
        }
    }
}

$Prototype = new ProductA();
$NewObject = new ProductA($Prototype);

/**
 * Method 2
 *
 * Class ProductB
 */
class ProductB
{
    /**
     * This function return new object
     *
     * @return ProductB
     */
    public function getClone()
    {
        $object = new ProductB();
        //do something with object
        return $object;
    }
}

$Prototype = new ProductB();
$NewObject = $Prototype->getClone();

/**
 *  Method 3
 *
 * Class ProductC
 */
class ProductC
{
    public function __clone()
    {
        //do something
    }
}

$Prototype = new ProductC();
$NewObject = clone $Prototype;