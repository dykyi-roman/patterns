<?php

/**
 * Class LazyProduct
 */
class LazyProduct
{
    protected $_product = null;
    protected $_fullName;
    protected $_id;    

    /**
     * @param $name
     * @param $version
     */
    public function __construct($id)
    {
        $this->_id = $id;        
    }
    
    /**
     * Object initialization affter call
     *
     * @return mixed     
     */
    public function getProduct()
    {
        if(is_null($this->_product)) {
            $this->_product = // upload from DB product data $this->_id
        }
        return $this->_product;
    }
       
    public function getSize()
    {        
        return $this->getProduct()->size();
    }
    
    public function getName()
    {        
        return $this->getProduct()->name();
    }
    
    public function getSname()
    {        
        return $this->getProduct()->sname();
    }

    /**          
     * Property _fullName initialization after call
     *
     * @return string
     */
    public function getProductFullName()
    {
        if(empty($this->_fullName)) {
            $this->_fullName = $this->getName() . ' ' . $this->getSname();
        }
        return $this->_fullName;
    }
}
