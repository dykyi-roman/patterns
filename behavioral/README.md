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
