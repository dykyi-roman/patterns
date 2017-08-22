<?php
/**
 * Singleton
 */
final class Product
{

    /**
     * @var self
     */
    private static $instance;

    /**
     * @var mixed
     */
    public $data;


    /**
     * get exist object
     *
     * @return self
     */
    public static function getInstance()
    {
        if (!(self::$instance instanceof self)) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    /**
     * set deny
     */
    private function __construct()
    {
    }

    /**
     * set deny
     */
    private function __clone()
    {
    }

    /**
     * set deny
     */
    private function __sleep()
    {
    }

    /**
     * set deny
     */
    private function __wakeup()
    {
    }
}
