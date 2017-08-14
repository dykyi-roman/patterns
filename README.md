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
### ======= PROTOTYPE ==========
```
$Prototype = new ProductA();
$NewProduct = new ProductA($Prototype);
```
### ======= COMMAND ==========
```
// or use factory pattern
$product  = new Product();
$registry = new CommandRegistry();
$registry->add(new DeliveryCommand());
$registry->add(new PackageCommand());
$registry->get($argv[1])->execute();

// or use registry pattern

$product  = new Product();
$factory = new ProductCommandFactory();
$factory->factory($argv[1], $product)->execute();
```
### ======= FACADE ==========
```
$products = new FacadeProduct();
$products->delivery(100, 45); 
```
