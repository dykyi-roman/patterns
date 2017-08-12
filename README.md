### ========= REGISTRY ============
```
Product::set('name', 'First product');
$var = Product::get('name');
```
### ======= OBJECT POOL ==========
```
Factory::pushProduct(new Product(100));
Factory::pushProduct(new Product(200));

$var_1 = Factory::getProduct(100)->getId();
$var_2 = Factory::getProduct(200)->getId();
```
### ======= SINGLETON ==========
```
$product_1 = Product::getInstance();
$product_2 = Product::getInstance();

$product_1->data = 100;
$product_2->data = 200;

// $product_1->data = 200
// $product_2->data = 200
```
