# Registry

========= USING OF REGISTRY ============
Product::set('name', 'First product');
$var = Product::get('name');

======= USING OF OBJECT POOL ==========
Factory::pushProduct(new Product(100));
Factory::pushProduct(new Product(200));

$var_1 = Factory::getProduct(100)->getId();
$var_2 = Factory::getProduct(200)->getId();
