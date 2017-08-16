/**
 * MockProduct
 */
class MockProduct
{
    public function delivery($from, $to)
    {
        // send product
    }
}

/**
 * Delegator
 */
class DelegateProduct
{
    public function send($from, $to)
    {
        $product = new MockProduct();
        $product->delivery($from, $to);
    }
}
