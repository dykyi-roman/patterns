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
