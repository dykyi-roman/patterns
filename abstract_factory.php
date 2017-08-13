<?php

/**
 * Class Product
 */
abstract class Product
{
    public abstract function write($data);
}

/**
 * Class ProductA
 */
class ProductA extends Product
{
    public function write($data)
    {
        // method body
    }
}

/**
 * Class ProductB
 */
class ProductB extends Product
{
    public function write($data)
    {
        // method body
    }
}

/**
 * Class FactoryAbstract
 */
abstract class FactoryAbstract
{
    public function create($type)
    {
        switch($type) {
            case'A':
                return new ProductA();
            case'B':
            default:
                return new ProductB();
        }
    }
}

/**
 * Class Factory
 *
 */
class Factory extends FactoryAbstract
{
    
}
