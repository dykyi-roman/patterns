# Registry

========= USING OF REGISTRY ============
Product::set('name', 'First product');
print_r(Product::get('name'));
========================================

 ======= USING OF OBJECT POOL ==========

Factory::pushProduct(new Product(100));
Factory::pushProduct(new Product(200));

print_r(Factory::getProduct(100)->getId());
print_r(Factory::getProduct(200)->getId());
