# REGISTRY
```
Product::set('name', 'First product');
$var = Product::get('name');
```
# LAZY LOADING PROXY

### Diagram
![patter types](https://github.com/dykyi-roman/patterns/blob/master/diagram/proxy_lazy_load.png)
### Example
```
$product = new LazyProduct('mazda', '3');
echo $product->getProductFullName(); // mazda 3
// OR
echo $product->getSize(); // data from DB init on the call moment
```
# LAZY LOADING WITH CLOSURES
```
$product = $productRepository->find($id);
$orders = $product->getOrders();
```
# FACADE

### Diagram
![patter types](https://github.com/dykyi-roman/patterns/blob/master/diagram/facade.png)
### Example
```
$products = new FacadeProduct();
$products->delivery(100, 45); 
```
# DECORATOR

### Diagram
![pattern](https://github.com/dykyi-roman/patterns/blob/master/diagram/decorator.png)
### Example
```
$decorator = new DecoratorProduct(new Product());
$decorator->format()
          ->stripXss()
          ->breakLongStrings();
```

# DAO - Data Access Object 
It looks like a pattern, but DAO use DI container
### Diagram
![pattern](https://github.com/dykyi-roman/patterns/blob/master/diagram/dao.png)
### Example
```
$product = new DaoProduct(DB::getInstance('mySQL'));
$product->findByName('bannan');
```

# Data Mapper 

### Diagram
![pattern](https://github.com/dykyi-roman/patterns/blob/master/diagram/data_mapper.png)
### Example
```
   $storage = new StorageAdapter([1 => ['produtcName' => 'domnikl', 'type' => 'test']]);
   $productMapper = new ProductMapper($storage);
   $user = $productMapper->findById(1);
```

# Composite

### Diagram
![pattern](https://github.com/dykyi-roman/patterns/blob/master/diagram/composite.png)
### Example
```
$product = new Product();
$product->addElement(new ProductElement());
$product->addElement(new ProductElement());

$subProduct = new Product();
$subProduct->addElement(new SubProductElement('detail_1'));
$subProduct->addElement(new SubProductElement('detail_2'));

$product->addElement($subProduct);
$product->render();  // <div>Render product elements .... <div>detail_1 detail_2</div></div>
```
