### ========= REGISTRY ============
```
Product::set('name', 'First product');
$var = Product::get('name');
```
### ======= OBJECT POOL ==========
```
Factory::pushProduct(new Product(100));
Factory::pushProduct(new Product(200));

// Factory::getProduct(100)->getId(); = 100
// Factory::getProduct(200)->getId(); = 200
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
