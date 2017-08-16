# OBJECT POOL

### Example
```
Factory::pushProduct(new Product(100));
Factory::pushProduct(new Product(200));

// Factory::getProduct(100)->getId(); = 100
// Factory::getProduct(200)->getId(); = 200
```
# SINGLETON

### Diagram
![patter types](https://github.com/dykyi-roman/patterns/blob/master/diagram/singleton.png)

### Example
```
$product_1 = Product::getInstance();
$product_2 = Product::getInstance();

$product_1->data = 100;
$product_2->data = 200;

// $product_1->data = 200
// $product_2->data = 200
```
# FACTORY

### Diagram
![patter types](https://github.com/dykyi-roman/patterns/blob/master/diagram/factoryMethod.png)

### Example
```
$factory = new FactoryA();
$product = $factory->getProduct();
print_r($product->getName()); // The product B

$factory = new FactoryB();
$product = $factory->getProduct();
print_r($product->getName()); // The product B
```
# ABSTRACT FACTORY

### Example
```
$factory = new Factory();
$product = $factory->create('A');
$product->write(['data']); // call method from class A
```
# BUILDER

### Diagram
![patter types](https://github.com/dykyi-roman/patterns/blob/master/diagram/builder.png)
### Example
```
$builder = new Builder();
$productA = new ProductA();
$productB = new ProductB();

$builder->setBuilderProduct($productA);
$builder->constructProduct();
$real = $builder->getProduct();
```
# PROTOTYPE

### Diagram
![patter types](https://github.com/dykyi-roman/patterns/blob/master/diagram/prototype.png)
### Example
```
$Prototype = new ProductA();
$NewProduct = new ProductA($Prototype);
```
# DELEGATE
### Diagram
![patter types](https://github.com/dykyi-roman/patterns/blob/master/diagram/delegate.png)
### Example
```
$product = new DelegateProduct();
$product->send("Kiev", "Odesa"); // Inside, will be creneate object for send
```
# ADAPTER
### Diagram
![patter types](https://github.com/dykyi-roman/patterns/blob/master/diagram/adapter.png)
### Example
```
$product = new ProductAdapter(new Product_2());
$product->getName();

$product = new ProductAdapter(new Product_1());
$product->getName();

```
