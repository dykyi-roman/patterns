### ========= REGISTRY ============
```
Product::set('name', 'First product');
$var = Product::get('name');
```
### ======= LAZY LOADING ==========
```
$product = new LazyProduct('mazda', '3');
echo $product->getProductFullName(); // mazda 3
// OR
echo $product->getSize(); // data from DB init on the call moment
```
### ======= LAZY LOADING WITH CLOSURES ==========
```
$product = $productRepository->find($id);
$orders = $product->getOrders();
```
### ======= FACADE ==========
```
$products = new FacadeProduct();
$products->delivery(100, 45); 
```
