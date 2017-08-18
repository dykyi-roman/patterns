<?php

/**
 * Class AbstractProduct
 */
abstract class AbstractProduct
{
    abstract public function doSomething();
}

/**
 * Class RealProduct
 */
class RealProduct extends AbstractProduct
{
    public function doSomething(){
        // ...
        return true;
    }
}

/**
 * Class NullProduct
 */
class NullProduct extends AbstractProduct
{
    public function doSomething(){
        return true;
    }
}
