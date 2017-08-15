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
### ======= FACTORY ==========
```
$factory = new FactoryA();
$product = $factory->getProduct();
print_r($product->getName()); // The product B

$factory = new FactoryB();
$product = $factory->getProduct();
print_r($product->getName()); // The product B
```
### ======= ABSTRACT FACTORY ==========
```
$factory = new Factory();
$product = $factory->create('A');
$product->write(['data']); // call method from class A
```
### ======= BUILDER ==========
```
$builder = new Builder();
$productA = new ProductA();
$productB = new ProductB();

$builder->setBuilderProduct($productA);
$builder->constructProduct();
$real = $builder->getProduct();
```
### ======= PROTOTYPE ==========
```
$Prototype = new ProductA();
$NewProduct = new ProductA($Prototype);
```
