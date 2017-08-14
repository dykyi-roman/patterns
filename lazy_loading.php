<?php

/**
 * Class LazyProduct
 */
class LazyProduct
{
    protected $_product = null;
    protected $_fullName;
    protected $_name;
    protected $_version;    

    /**
     * @param $name
     * @param $version
     */
    public function __construct($name, $version)
    {
        $this->_name = $name;
        $this->_version = $version;
    }
    
    
    /**
     * Object initialization affter call
     *
     * @return mixed     
     */
    public function getSize()
    {
        if(is_null($this->_product)) {
            $this->_product = // upload from DB product data
        }
        return $this->_product;
    }

    /**          
     * Property _fullName initialization after call
     *
     * @return string
     */
    public function getProductFullName()
    {
        if(empty($this->_fullName)) {
            $this->_fullName = $this->_name . ' ' . $this->_version;
        }
        return $this->_fullName;
    }
}
