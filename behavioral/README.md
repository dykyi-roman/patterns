# COMMAND

### Diagram
![patter types](https://github.com/dykyi-roman/patterns/blob/master/diagram/command.png)
### Example
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
### Observer
![patterns](https://github.com/dykyi-roman/patterns/blob/master/diagram/observer.png)
### Example
```
$product = new Product();
$product->attach(new Client());
$product->attach(new Customer());
$product->delete(100); // attach class get information about delate product action  
```
### Iterator
![patterns](https://github.com/dykyi-roman/patterns/blob/master/diagram/iterator.png)
### Example
```
$start = microtime(true);
$productList = new ProductList();
for ($i=1; $i < 10000; $i++) {
  $productList->addProduct(new Product($i));
}
$productsTitle = [];
foreach ($productsTitle as $product) {
  $books[] = $product->getTitle();
}
 echo "Time: ".(microtime(true) - $start); // 1.2 sec

// Without Iterator

$start = microtime(true);
$productList = [];
for ($i=1; $i < 10000; $i++) {
  $productList[] = new Product($i);
}
$productsTitle = [];
foreach ($productsTitle as $i => $product) {
  $books[] = $product->getTitle();
}
 echo "Time: ".(microtime(true) - $start); // 0.6 sec
```
