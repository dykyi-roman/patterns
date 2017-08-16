
/**
 * Implementor
 */
interface ProductInterface
{
    public function getName($id);
}

/**
 * Implementor Product_1
 */
class Product_1 implements ProductInterface
{
    public function getName($id)
    {
        return 'Product 1 Name '. $id;
    }
}

/**
 * Implementor Product_2 
 */
class Product_2 implements ProductInterface
{
  public function getName($id)
    {
        return 'Product 2 Name '. $id;
    }
}

/**
 * Factory
 */
class Factory
{
    private $_product;
    
    public function  __construct(ProductInterface $product)
    {
        $this->_product = $product;
    }
    
    public function getName($id)
    {
        return $this->_product->getName($id);
    }
}
